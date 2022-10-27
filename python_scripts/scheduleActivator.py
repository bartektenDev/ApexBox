#!/usr/bin/env python
# Scheduler System Automated for EarthBOX
# Designed and Developed by Bart Tarasewicz 3/10/2020
# All rights and copyright is reserved.

import ntplib
import re
import os
import time
from time import ctime
from datetime import datetime

currentDT = datetime.now()

work = ""
readTimeAMPM12 = ""
TIME_TO_WATER = ""
COMPLETED_WATER_TODAY = ""

dayFromSystem = ""
dayFromSystem = currentDT.strftime("%a")
dayToday = ""
dayToday = str(dayFromSystem)

readTimeAMPM12 = ""

def whatsToday():
   global dayToday, readTimeAPM12

   print("System READ: " + dayToday)
   readTimeAMPM12 = currentDT.strftime("%I:%M:%S %p")

   #result = re.search('z(.*) ', DATE_TIME_OUTPUT)
   #print(result.group(1))
   if "Sun" in dayToday:
       print('Script READ: Sunday')
       dayToday = "sunday"
   elif "Mon" in dayToday:
       print('Script READ: Monday')
       dayToday = "monday"
   elif "Tue" in dayToday:
       print('Script READ: Tuesday')
       dayToday = "tuesday"
   elif "Wed" in dayToday:
       print('Script READ: Wednesday')
       dayToday = "wednesday"
   elif "Thur" in dayToday:
       print('Script READ: Thursday')
       dayToday = "thursday"
   elif "Fri" in dayToday:
       print('Script READ: Friday')
       dayToday = "friday"
   elif "Sat" in dayToday:
       print('Script READ: Saturday')
       dayToday = "saturday"
   else:
       print('I have no sense of direction. I read: ' + dayToday)

   print("Script READ TIME: " + readTimeAMPM12)

   checkToWork()

def checkToWork():
   global dayToday, workFunctionText, readTimeLIVE
   workFunctionText = ""

   print('Lets start checking if we have any work to do')

   ftodo=open("./logs/dateLogs/" + dayToday + "Todo.txt", "r")
   contentsWork = ftodo.read()

   print("Read that we have to do: " + contentsWork)

   ftodotimestart=open("./logs/dateLogs/" + dayToday + "TodoTime.txt", "r")
   contentsWorkTimeStart = ftodotimestart.read()

   ftodotimeend=open("./logs/dateLogs/" + dayToday + "EndTime.txt", "r")
   contentsWorkTimeEnd = ftodotimeend.read()

   if "water" in contentsWork:
       work = "watering at"
       workFuntionText = "the water pump"
   elif "fan" in contentsWork:
       work = "activating the fan"
       workFunctionText = "the fan"
   elif "light" in contentsWork:
       work = "activating the growlight"
       workFunctionText = "the growlight"
   else:
       work = "not doing anything at"
       workFunctionText = "no work"
       print('Theres nothing to do today! Today is: '+ dayToday)

   if work != " not doing anything at ":
       #findTimeDifferenceTillActivation()
       print(workFunctionText + ' should be on between ' + contentsWorkTimeStart + ' - ' + contentsWorkTimeEnd + ' on ' + dayToday)
       shouldActivateFunctionQ = isNowInTimePeriod(contentsWorkTimeStart, contentsWorkTimeEnd, readTimeLIVE)

       if shouldActivateFunctionQ == False:
           print("We are too late to activate.")
       else:
           print("Turning it on. It should be on right now.")
           if workFunctionText == "the growlight":
               turnOnGrowLight()
           elif workFunctionText == "the fan":
               turnOnFan()
           elif workFunctionText == "the water pump":
                print("We have to water but we wont.")
           else:
                print("Error.")

def findTimeDifferenceTillActivation():
    global activateTime, workFunctionText, readTimeAMPM12, tdelta, timeInSeconds

    fileLogData = open("./logs/dateLogs/" + dayToday + "TodoTime.txt", "r")
    timeToRun = fileLogData.read()

    fileLogData2 = open("./logs/dateLogs/" + dayToday + "EndTime.txt", "r")
    timeToEndRun = fileLogData2.read()

    s1 = currentDT.strftime("%I:%M:%S %p")
    s2 = timeToRun #time to activate a automated schedule function
    s3 = timeToEndRun #time to disable a automated schedule function
    FMT = '%I:%M:%S %p'
    tdelta = datetime.strptime(s2, FMT) - datetime.strptime(s1, FMT)
    convertTimeToStr = tdelta
    tdelta2 = datetime.strptime(s3, FMT) - datetime.strptime(s1, FMT)
    convertTimeToStr2 = tdelta3
    print(tdelta + " - - " + tdelta2)

    if "-" in str(convertTimeToStr):
        print('We are some time behind today in order to complete this task')
        if workFuntionText == "the water pump":
            print("Not activating the pump even though thats our task, we missed our shot.")
        elif workFuntionText == "the fan":
            print("Enabling the fan (outlet 2) because it should be on right now")
        elif workFuntionText == "the growlight":
            print("Enabling the growlight (outlet 1) because it should be on right now")
    elif "-1" in str(convertTimeToStr):
        print('We are some time behind today in order to complete this task')
    else:
        #convert from 06:04:21 to seconds
        timeInSeconds = get_sec(str(tdelta))
        countdown(timeInSeconds, workFunctionText)

def countdown(seconds, Function):
    global workFunctionText, tdelta, readTimeAMPM12, timeInSeconds

    starttime = time.time()

    readTimeLIVE = datetime.now().strftime("%I:%M:%S %p")

    t = timeInSeconds

    while t:
        mins, secs = divmod(t, 60)
        timer = '{:02d}:{:02d}'.format(mins, secs)
        print(timer)
        time.sleep(1)
        t -= 1
    print('Blast Off!!!')

        # time.sleep(60.0 - ((time.time() - starttime) % 60.0))
        # print(c.time())

    if workFunctionText == "the water pump":
        print("Activating water...")
        #turnOnWaterPump3sec()
    elif workFunctionText == "the fan":
        print("Activating fan...")
        #turnOnFan():
    elif workFunctionText == "the growlight":
        print("Activating growlight...")
        #turnOnGrowLight():
    else:
        print("I dont know what i did..." + str(workFuntionText))

    #daysAheadReset()

def turnOnWaterPump3sec():
    print("Water pump activated")
    os.system("sudo python /var/www/html/python_scripts/moveServo.py")

def turnOnFan():
    print("Fan activated")
    os.system("sudo python /var/www/html/python_scripts/switch2On.py")

def turnOffFan():
    print("Fan disabled")
    os.system("sudo python /var/www/html/python_scripts/switch2Off.py")

def turnOnGrowLight():
    print("Grow light activated")
    os.system("sudo python /var/www/html/python_scripts/switch1On.py")

def turnOffGrowLight():
    print("Grow light disabled")
    os.system("sudo python /var/www/html/python_scripts/switch1Off.py")

def get_sec(time_str):
    """Get Seconds from time."""
    h, m, s = time_str.split(':')
    return int(h) * 3600 + int(m) * 60 + int(s)

def getTimeNow():
    global readTimeLIVE
    readTimeLIVE = datetime.now().strftime("%I:%M:%S %p")

def isNowInTimePeriod(startTime, endTime, nowTime):
    if startTime < endTime:
        return nowTime >= startTime and nowTime <= endTime
    else: #Over midnight
        return nowTime >= startTime or nowTime <= endTime

def daysAheadReset():
   print('All days ahead of ' + dayToday + ' reset till sunday')


if __name__ == '__main__':
    getTimeNow()
    whatsToday()
