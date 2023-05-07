Experiment No - 3: Design and configure a network with four LAN connected through WAN PPP(Point to Point Port) connection by using two Cisco routers

![image](https://user-images.githubusercontent.com/47166768/236658814-708de58a-75ba-42a2-9ae8-7b2460b30b33.png)

![image](https://user-images.githubusercontent.com/47166768/236658955-6d962df1-252f-4739-b2f1-1940e63e5366.png)

![image](https://user-images.githubusercontent.com/47166768/236659129-15cf8b4b-1a00-4e1a-8a65-692dcf531f2c.png)

router 1 > CLI > 
exit 

exit 

Router#enable
Router#configure terminal
Enter configuration commands, one per line.  End with CNTL/Z.
Router(config)#hostname R1
R1(config)#username R2 password cisco
R1(config)#ip address 10.1.1.1 2555.255
               ^
% Invalid input detected at '^' marker.
	
R1(config)#ip address 10.1.1.1 2555.255.255.252
               ^
% Invalid input detected at '^' marker.
	
R1(config)#ip address 10.1.1.1 255.255.255.252
               ^
% Invalid input detected at '^' marker.
	
R1(config)#encapsulation ppp
             ^
% Invalid input detected at '^' marker.
	
R1(config)#interface serial 2/0
R1(config-if)#ip address 10.1.1.1 255.255.255.252
R1(config-if)#encapsulation ppp
R1(config-if)#
%LINEPROTO-5-UPDOWN: Line protocol on Interface Serial2/0, changed state to down
ppp authentication chap
R1(config-if)#clock rate?
rate  
R1(config-if)#clock rate?
rate  
R1(config-if)#clock rate
% Incomplete command.
R1(config-if)#end
R1#
%SYS-5-CONFIG_I: Configured from console by console
copy run start
Destination filename [startup-config]? 
Building configuration...
[OK]

![image](https://user-images.githubusercontent.com/47166768/236659672-acb87f77-9f23-49d1-99ed-92a5f091c2bf.png)

Router>enable
Router#configure terminal
Enter configuration commands, one per line.  End with CNTL/Z.
Router(config)#hostname R2
R2(config)#username R1 password cisco
R2(config)#interface serial 2/0
R2(config-if)#ip address 10.1.1.2 255.255.255.252
R2(config-if)#no shutdown
R2(config-if)#encapsulation ppp
R2(config-if)#ppp authentication 
%LINEPROTO-5-UPDOWN: Line protocol on Interface Serial2/0, changed state to up
chap
R2(config-if)#
%LINEPROTO-5-UPDOWN: Line protocol on Interface Serial2/0, changed state to down

%LINEPROTO-5-UPDOWN: Line protocol on Interface Serial2/0, changed state to up
end
R2#
%SYS-5-CONFIG_I: Configured from console by console
copy run start
Destination filename [startup-config]? 
Building configuration...
[OK]
R2#

![image](https://user-images.githubusercontent.com/47166768/236659797-4119b5c1-0775-431f-8165-95a66bf639ee.png)


![image](https://user-images.githubusercontent.com/47166768/236659857-fad35425-2c82-4004-825a-fac2fc7177a1.png)


![image](https://user-images.githubusercontent.com/47166768/236659903-8e1838ea-3598-49b3-96d7-4f2e603e9ef7.png)







