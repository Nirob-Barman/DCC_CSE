1. Design and Configure Email protocol SMTP(Simple Mail Transfer Protocol) and POP (Post Office Protocol) using cisco routers.
2. Design and configure a RIP (Routing Information Protocol) By using RIPv1 or RIPv2 dynamic routing protocol also coonnected four LANs


![image](https://user-images.githubusercontent.com/47166768/224525636-7e3b921a-e6fa-4afc-8cd4-36de01d5c84e.png)
![image](https://user-images.githubusercontent.com/47166768/224526327-b674209a-eded-41d1-ba09-2efd3c5839ed.png)


![image](https://user-images.githubusercontent.com/47166768/224525694-55732f75-c5e7-47a3-9d9d-5da083e35073.png)

![image](https://user-images.githubusercontent.com/47166768/224525997-2a136f85-92f2-4b5a-bda0-b1beb4d336e4.png)

Router>enable
Router#configure terminal
Enter configuration commands, one per line.  End with CNTL/Z.
Router(config)#interface fastethernet 0/0
Router(config-if)#ip address 192.168.1.1 255.255.255.0
Router(config-if)#no shutdown

Router(config-if)#
%LINK-5-CHANGED: Interface FastEthernet0/0, changed state to up

%LINEPROTO-5-UPDOWN: Line protocol on Interface FastEthernet0/0, changed state to up
exit
Router(config)#enable
% Incomplete command.
Router(config)#configure terminal
                     ^
% Invalid input detected at '^' marker.
	
Router(config)#configure terminal
                     ^
% Invalid input detected at '^' marker.
	
Router(config)#interface fastethernet 0/1
%Invalid interface type and number
Router(config)#interface fastethernet 1/0
Router(config-if)#ip address 192.168.2.1 255.255.255.0
Router(config-if)#no shutdown

Router(config-if)#
%LINK-5-CHANGED: Interface FastEthernet1/0, changed state to up

%LINEPROTO-5-UPDOWN: Line protocol on Interface FastEthernet1/0, changed state to up
exit
Router(config)#interface fastethernet 1/0
Router(config-if)#no shutdown
Router(config-if)#exit
Router(config)#interface serial 2/0
Router(config-if)#ip address 10.0.0.1 255.0.0.0
Router(config-if)#no shutdown

%LINK-5-CHANGED: Interface Serial2/0, changed state to down
Router(config-if)#exit
Router(config)#exit
Router#
%SYS-5-CONFIG_I: Configured from console by console







![image](https://user-images.githubusercontent.com/47166768/224526198-7ff05694-aaf9-4678-b6ee-d8713fa5e4df.png)







Router>enable
Router#configure terminal
Enter configuration commands, one per line.  End with CNTL/Z.
Router(config)#interface fastethernet 0/0
Router(config-if)#ip address 192.168.3.1 255.255.255.0
Router(config-if)#no shutdown

Router(config-if)#
%LINK-5-CHANGED: Interface FastEthernet0/0, changed state to up

%LINEPROTO-5-UPDOWN: Line protocol on Interface FastEthernet0/0, changed state to up
exitt
                      ^
% Invalid input detected at '^' marker.
	
Router(config-if)#exit
Router(config)#interface fastethernet 1/0
Router(config-if)#ip address 192.168.4.1 255.255.255.0
Router(config-if)#no shutdown

Router(config-if)#
%LINK-5-CHANGED: Interface FastEthernet1/0, changed state to up

%LINEPROTO-5-UPDOWN: Line protocol on Interface FastEthernet1/0, changed state to up

Router(config-if)#exit
Router(config)#interface serial 2/0
Router(config-if)#ip address 10.0.0.2 255.0.0.0
Router(config-if)#no shutdown

Router(config-if)#
%LINK-5-CHANGED: Interface Serial2/0, changed state to up
exit
Router(config)#exii
%LINEPROTO-5-UPDOWN: Line protocol on Interface Serial2/0, changed state to
Router(config)#
Router(config)#exit
Router#
%SYS-5-CONFIG_I: Configured from console by console




#### RIP Commands 
* (router config) router rip
* 


![image](https://user-images.githubusercontent.com/47166768/224526448-dc94cd61-a6c4-43a8-a2c3-a0d045b4a5ef.png)


Router(config-if)#exit
Router(config)#router rip
Router(config-router)#network 192.168.1.0
Router(config-router)#network 192.168.2.0
Router(config-router)#network 10.0.0.0
Router(config-router)#exit
Router(config)#
Router(config)#router rip
Router(config-router)#





![image](https://user-images.githubusercontent.com/47166768/224526413-e3f608cc-b4c5-48a7-90c0-f172da61492b.png)

Router>enable
Router#configure terminal
Enter configuration commands, one per line.  End with CNTL/Z.
Router(config)#router rip
Router(config-router)#network 192.168.3.0
Router(config-router)#
Router(config-router)#network 192.168.4.0
Router(config-router)#network 10.0.0.0
Router(config-router)#


