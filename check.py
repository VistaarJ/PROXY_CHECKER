import os

myfile = open("candidates.txt")
read = myfile.read()
read = read.split()

response_url = "https://www.google.com/humans.txt"
redirect_output_to_file = "temp.txt"
google_return_value="Google is built by a large team of engineers, designers, researchers, robots, and others in many different sites across the globe. It is updated continuously, and built with more tools and technologies than we can shake a stick at. If you'd like to help us out, see google.com/careers.\n"

for line in read:
	comm = "curl -s --connect-timeout 0.3 --proxy " + "http://" + line + " " + response_url + " > " + redirect_output_to_file
	print(comm)
	os.system(comm)
	myfile = open("temp.txt")
	output = myfile.read()
	if(output==google_return_value):
		print("Proxy working---->  " + line)
	else:
		print("Proxy not working!" + line)
#print(output)