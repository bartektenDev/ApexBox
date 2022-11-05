import os


print("Scanning available Wi-Fi networks...")

os.system("sudo iw dev wlx74da38eeb9b3 scan | grep SSID: > ./logs/scannedWifiSSID.txt")

#read outputted file
f = open("./logs/scannedWifiSSID.txt", "r")
textData = f.read()
f.close()

#fix the weird layout of the SSIDs
textData = textData.replace("	SSID: ","")


#write fixed layout file
f2 = open("./logs/scannedWifiSSID.txt", "w")
f2.write(textData)
f2.close()

#done!
print("Finished scanning WiFi networks.")
print("")
f3 = open("./logs/scannedWifiSSID.txt", "r")
print(f3.read())
f3.close()
