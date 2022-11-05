from urllib.request import urlopen
import time

while True:
    response = urlopen('http://10.0.42.42/python_scripts/logs/currentSoilTemp.txt')
    html = response.read()

    f = open ("/var/www/html/python_scripts/logs/currentSoilTemp.txt", "w")
    writeData = html
    s = html.decode()
    f.write(s)
    f.close()
    print(html)

    response2 = urlopen('http://10.0.42.42/python_scripts/logs/currentSoilMoisture.txt')
    html2 = response2.read()

    f2 = open ("/var/www/html/python_scripts/logs/currentSoilMoisture.txt", "w")
    writeData2 = html2
    s2 = html2.decode()
    first_chars = s2[0:4]
    f2.write(first_chars)
    f2.close()
    print(html2)
    time.sleep(3)
