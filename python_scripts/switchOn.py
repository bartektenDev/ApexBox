import RPi.GPIO as GPIO 
import time 

channel = 20 
# GPIO setup 
GPIO.setmode(GPIO.BCM) 
GPIO.setwarnings(False)
GPIO.setup(channel, GPIO.OUT) 
GPIO.output(channel, GPIO.LOW)
