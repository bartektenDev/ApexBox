import time

from board import SCL, SDA
import busio

from adafruit_seesaw.seesaw import Seesaw

i2c_bus = busio.I2C(SCL, SDA)

ss = Seesaw(i2c_bus, addr=0x36)

while True:
    # read moisture level through capacitive touch pad
    touch = ss.moisture_read()

    # read temperature from the temperature sensor
    temp = ss.get_temp()

    print("temp: " + str(temp) + "  moisture: " + str(touch))

    # Write to log file so app can read
    f = open ("./logs/currentSoilTemp.txt", "w")
    tempF = "%.1f" % temp
    f.write(tempF)
    f.close()

    # Write to log file so app can read
    f = open ("./logs/currentSoilMoisture.txt", "w")
    moistureTemp = "%.1f" % touch
    f.write(moistureTemp)
    f.close()

    time.sleep(5)
