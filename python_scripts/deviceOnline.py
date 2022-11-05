import urllib
from gpiozero import LED
from time import sleep

ledConnectedToInternet = LED(13)

while True:
	ledConnectedToInternet.on()
	sleep(2)
	ledConnectedToInternet.off()
	sleep(2)
