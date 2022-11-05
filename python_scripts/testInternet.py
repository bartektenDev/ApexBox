#!/bin/env python

import os, time

path = os.getcwd()

time.sleep(10)


print("Testing internet connectivity...")
os.system("cd /var/www/html/ApexBox/python_scripts/ && bash testInternet.sh")
print("Testing internet complete.")

#now check if we are online or offline...

f = open("/var/www/html/ApexBox/python_scripts/logs/internetStatus.txt", "r")
internetStatusTXT = f.read()
print(str(internetStatusTXT))

if("Offline" in str(internetStatusTXT)):

	#change apache page config and load setup page

	f2 = open("/var/www/html/ApexBox/index.php", "w")
	f2.write("<?php $loadPage = location.href; if(strpos($loadPage, 'index.php') !== true){ header('Location: setup_apex.php'); }else{ }?>")
	f2.close()

elif("Online" in str(internetStatusTXT)):

	#load apexbox login page
	f2 = open("/var/www/html/ApexBox/index.php", "w")
	f2.write("<?php $loadPage = location.href; if(strpos($loadPage, 'index.php') !== true){ header('Location: mailbox.php'); }else{ }?>")
	f2.close()
else:
	print("MAJOR ERROR! /var/www/html/ApexBox/python_scripts/testInternet.py")

	f2 = open("/var/www/html/ApexBox/index.php", "w")
	f2.write("<?php $loadPage = location.href; if(strpos($loadPage, 'index.php') !== true){ header('Location: setup_apex.php'); }else{ }?>")
	f2.close()
