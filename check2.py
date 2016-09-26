import os
import Queue
import threading
import urllib2


urls=["172.16.114.146:3128",
"172.16.114.151:3128",
"172.16.114.158:3128",
"172.16.114.163:3128",
"172.16.114.181:3128",
"172.16.116.71:3128",
"172.16.114.34:3128",
"172.16.114.53:8080",
"172.16.114.69:3128",
"172.16.114.84:8080",
"172.16.114.93:3128"]


response_url = "https://www.google.com/humans.txt"
redirect_output_to_file = "temp.txt"
google_return_value="Google is built by a large team of engineers, designers, researchers, robots, and others in many different sites across the globe. It is updated continuously, and built with more tools and technologies than we can shake a stick at. If you'd like to help us out, see google.com/careers.\n"

for u in urls:
	comm = "curl -s --connect-timeout 1 --proxy " + "http://" + u + " " + response_url + " > " + redirect_output_to_file 
	print(comm)
	os.system(comm)
	myfile = open("temp.txt")
	output = myfile.read()
	if(output==google_return_value):
		print("Proxy working---->  " + u)
#print(output)