from gpiozero import LED
import time

ledMiniLight = LED(18)

while True:
    ledMiniLight.on()
