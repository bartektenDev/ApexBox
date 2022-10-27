from subprocess import call
import os

print ("Boot successful.")
os.system('sudo python checkInternetConnection.py')
print ("EarthBOX: Reading...")

print ("Starting live stream cam...")
os.system('sudo python filename.py')

print ("Running sensor scripts...")
os.system('sudo python readTempHumi.py')

print ("EarthBOX: All services are online!")
os.system('sudo python deviceOnline.py')
