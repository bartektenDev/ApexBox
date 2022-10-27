#written for python2

import RPi.GPIO as GPIO
from time import sleep

GPIO.setmode(GPIO.BCM)

GPIO.setup(17, GPIO.OUT)

fan = GPIO.PWM(17, 100)
print "stop"
fan.stop()
GPIO.cleanup()

f = open ("/var/www/html/python_scripts/logs/fanStatus.txt", "w")
f.write("off")
f.close()
