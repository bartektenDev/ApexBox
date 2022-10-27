#!/usr/bin/python
import struct, array, time, io, fcntl

I2C_SLAVE=0x0703
HTU21D_ADDR = 0x40
CMD_READ_TEMP_HOLD = "\xE3"
CMD_READ_HUM_HOLD = "\xE5"
CMD_READ_TEMP_NOHOLD = "\xF3"
CMD_READ_HUM_NOHOLD = "\xF5"
CMD_WRITE_USER_REG = "\xE6"
CMD_READ_USER_REG = "\xE7"
CMD_SOFT_RESET= "\xFE"

class i2c(object):
   def __init__(self, device, bus):

          self.fr = io.open("/dev/i2c-"+str(bus), "rb", buffering=0)
          self.fw = io.open("/dev/i2c-"+str(bus), "wb", buffering=0)

          # set device address

          fcntl.ioctl(self.fr, I2C_SLAVE, device)
          fcntl.ioctl(self.fw, I2C_SLAVE, device)

   def write(self, bytes):
          self.fw.write(bytes)

   def read(self, bytes):
          return self.fr.read(bytes)

   def close(self):
          self.fw.close()
          self.fr.close()

class HTU21D(object):
   def __init__(self):
          self.dev = i2c(HTU21D_ADDR, 1) #HTU21D 0x40, bus 1
          self.dev.write(CMD_SOFT_RESET) #soft reset
          time.sleep(.1)

   def ctemp(self, sensorTemp):
          tSensorTemp = sensorTemp / 65536.0
          tempCelsius = -46.85 + (175.72 * tSensorTemp)
          tempFahrenheit1 = tempCelsius * 9
          tempFahrenheit2 = tempFahrenheit1 / 5
          tempFahrenheit3 = tempFahrenheit2 + 32
          endResult = tempFahrenheit3
          return endResult

   def chumid(self, sensorHumid):
          tSensorHumid = sensorHumid / 65536.0
          return -6.0 + (125.0 * tSensorHumid)

   def crc8check(self, value):
          # Ported from Sparkfun Arduino HTU21D Library: https://github.com/sparkfun/HTU21D_Breakout
          remainder = ( ( value[0] << 8 ) + value[1] ) << 8
          remainder |= value[2]

          # POLYNOMIAL = 0x0131 = x^8 + x^5 + x^4 + 1
          # divsor = 0x988000 is the 0x0131 polynomial shifted to farthest left of three bytes
          divsor = 0x988000

          for i in range(0, 16):
                 if( remainder & 1 << (23 - i) ):
                        remainder ^= divsor
                 divsor = divsor >> 1

          if remainder == 0:
                 return True
          else:
                 return False

   def read_tmperature(self):
          self.dev.write(CMD_READ_TEMP_NOHOLD) #measure temp
          time.sleep(.1)

          data = self.dev.read(3)
          buf = array.array('B', data)

          if self.crc8check(buf):
                 temp = (buf[0] << 8 | buf [1]) & 0xFFFC
                 return self.ctemp(temp)
          else:
                 return -255

   def read_humidity(self):
          self.dev.write(CMD_READ_HUM_NOHOLD) #measure humidity
          time.sleep(.1)

          data = self.dev.read(3)
          buf = array.array('B', data)

          if self.crc8check(buf):
                 humid = (buf[0] << 8 | buf [1]) & 0xFFFC
                 return self.chumid(humid)
          else:
                 return -255

if __name__ == "__main__":
        # Create humdity sensor object
        obj = HTU21D()
        while True:
                # Read temp and humidity and log to file
                temp = obj.read_tmperature()
                humid = obj.read_humidity()
                out_string = "Temp=%.1f F Humi=%.1f" % (temp, humid)
                #print (out_string + "%")

                # Write to log file so app can read
                f = open ("/var/www/html/python_scripts/logs/currentTemp.txt", "w")
                tempF = "%.1f" % temp
                f.write(tempF)
                f.close()

                f = open ("/var/www/html/python_scripts/logs/currentHumidity.txt", "w")
                hummis = "%.1f" % humid
                f.write(hummis)
                f.close()

                time.sleep(3)
