#written for python2

import RPi.GPIO as GPIO
from time import sleep

GPIO.setmode(GPIO.BCM)

GPIO.setup(17, GPIO.OUT)

fan = GPIO.PWM(17, 100)
print "start"
fan.start(0)
sleep (0.5)
fan.ChangeDutyCycle(100)

f = open ("/var/www/html/python_scripts/logs/fanStatus.txt", "w")
f.write("on")
f.close()
