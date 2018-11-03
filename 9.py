import sys
import socket 
import os

####/END
    

###Banner
print"""\033[0;31m 
 _____           _    _____                                 
|  __ \         | |  / ____|                                
| |__) |__  _ __| |_| (___   ___ __ _ _ __  _ __   ___ _ __ 
|  ___/ _ \| '__| __|\___ \ / __/ _` | '_ \| '_ \ / _ \ '__|
| |  | (_) | |  | |_ ____) | (_| (_| | | | | | | |  __/ |   
|_|   \___/|_|   \__|_____/ \___\__,_|_| |_|_| |_|\___|_|   
     \033[0;32mPort-Scanner  |                                                       
                                        
\033[0m """ 
#END

####OPEN VARIAVEIS
target=raw_input("\033[1;34mHost\033[0m:")
Port_start=raw_input("\033[1;34mPort Start\033[0m:")
Port_end =raw_input("\033[1;34mPort End:\033[0m")
######./END#####

#####START SCAN########
for Port in range (int(Port_start),int(Port_end)):
        try:
                print "\033[0;34m\n[-]Port Closed\033[0m", Port
                s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
                s.settimeout(5)
                s.connect((socket.gethostbyname(target), int(Port)))
                print "\033[0;32m\n[+]Open Port\033[0m", Port
                s.close()
        except:
                pass
####./END#############

print('\r\n')
