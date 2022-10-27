import urllib
from gpiozero import LED
from time import sleep

ledConnectedToInternet = LED(26)

ledConnectedToInternet.on()
sleep(1)
ledConnectedToInternet.off()
sleep(1)
ledConnectedToInternet.on()
sleep(1)
ledConnectedToInternet.off()
sleep(1)
ledConnectedToInternet.on()
sleep(1)
ledConnectedToInternet.off()
sleep(1)
