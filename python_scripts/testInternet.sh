#!/bin/bash


wget -q --spider http://google.com

if [ $? -eq 0 ]; then
    echo "Online" > ./logs/internetStatus.txt
else
    echo "Offline" > ./logs/internetStatus.txt
fi


