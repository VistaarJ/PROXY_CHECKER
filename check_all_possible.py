import os
import struct, socket

class bcolors:
    HEADER = '\033[95m'
    OKBLUE = '\033[94m'
    OKGREEN = '\033[92m'
    WARNING = '\033[93m'
    FAIL = '\033[91m'
    ENDC = '\033[0m'
    BOLD = '\033[1m'
    UNDERLINE = '\033[4m'

myfile = open("proxy_ranges.txt")
read = myfile.read()
read = read.split()



response_url = "https://www.google.com/humans.txt"
redirect_output_to_file = "temp2.txt"
google_return_value="Google is built by a large team of engineers, designers, researchers, robots, and others in many different sites across the globe. It is updated continuously, and built with more tools and technologies than we can shake a stick at. If you'd like to help us out, see google.com/careers.\n"

def inc(str):
	ip2int = lambda ipstr: struct.unpack('!I', socket.inet_aton(ipstr))[0]
	val = ip2int(str) + 1
	int2ip = lambda n: socket.inet_ntoa(struct.pack('!I', n))
	rev = int2ip(val)
	# ans = lambda n: socket.inet_ntoa(struct.pack('!I', n))
	return rev

for line in read:
	str = line.split("-")
	place = str[0]
	starting_add = str[1]
	ending_add = str[2]
	print(place + starting_add + ending_add)
	temp = starting_add
	while(temp!=ending_add):
		with_port1 = temp + ':' + "3128"
		comm1 = "curl -s --connect-timeout 0.3 --proxy " + "http://" + with_port1 + " " + response_url + " > " + redirect_output_to_file
		os.system(comm1)
		k = open("temp2.txt")
		output = k.read()
		# print(output)
		if(output==google_return_value):
			print(bcolors.OKGREEN + "Proxy working---->  " + bcolors.ENDC + temp)
		temp = inc(temp)
		print(temp)

	temp = starting_add
	while(temp!=ending_add):
		with_port2 = temp + ':' + "8080"
		comm2 = "curl -s --connect-timeout 0.3 --proxy " + "http://" + with_port2 + " " + response_url + " > " + redirect_output_to_file
		os.system(comm2)
		k = open("temp2.txt")
		output = k.read()
		# print(output)
		if(output==google_return_value):
			print(bcolors.OKGREEN + "Proxy working---->  " + bcolors.ENDC + temp)
		temp = inc(temp)
		print(temp)

