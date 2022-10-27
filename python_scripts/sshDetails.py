import os

# Get the name of the user
user = os.getlogin()
os.system("sudo hostname -I > /var/www/html/python_scripts/logs/sshHostname.txt")

# read files to determine what network the device is on and then what the local ip is
f=open("/var/www/html/python_scripts/logs/sshHostname.txt", "r")
contents = f.read()
f.close()
if contents != "":
    wr = open("/var/www/html/python_scripts/logs/sshDetails.txt", 'w')
    wr.write("User: " + str(user) + "\n" + "Network IP: " + contents)    		
    print("Wrote SSH Details to log.")
