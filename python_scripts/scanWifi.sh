#!/bin/bash

#delete cache
#rm -f /var/www/html/ApexBox/python_scripts/logs/scannedWifiSSID.txt

echo "Scanning available Wi-Fi networks..."
echo 12345678 | sudo -S iw dev wlx74da38eeb9b3 scan | grep SSID: > /var/www/html/ApexBox/python_scripts/logs/scannedWifiSSID.txt

#read file
textData=`cat /var/www/html/ApexBox/python_scripts/logs/scannedWifiSSID.txt`
#replace the SSID: text to nothing and allow the list to be written

#works
#echo "SSID: Google Fi" | awk '{gsub(/SSID: /,"")}1'

sudo echo $textData | awk '{gsub(/SSID: /,"\n")}1' > /var/www/html/ApexBox/python_scripts/logs/scannedWifiSSID.txt


exit
