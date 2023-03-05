1. Design and Configure Email protocol SMTP(Simple Mail Transfer Protocol) and POP (Post Office Protocol) using cisco routers.

- Experiment No
- Experiment Name
- Objective
- Theroy
- Router Configuration
- Cisco Packet Tracer
- Ping snapshot



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
	
Router(config)#interface fastethernet 0/1
Router(config-if)#ip address 192.168.2.1 255.255.255.0
Router(config-if)#no shutdown

Router(config-if)#
%LINK-5-CHANGED: Interface FastEthernet0/1, changed state to up
exitt
                      ^
% Invalid input detected at '^' marker.
	
Router(config-if)#exit
Router(config)#exit
Router#
%SYS-5-CONFIG_I: Configured from console by console

Router#

![image](https://user-images.githubusercontent.com/47166768/222942972-6b7a2555-b430-459e-abd8-dfe0928af745.png)



![image](https://user-images.githubusercontent.com/47166768/222943003-41bc0cbd-712b-405d-8b48-cf623f4d0fb4.png)

![image](https://user-images.githubusercontent.com/47166768/222943035-9ef126dc-718f-4465-a7ed-ad7bd992923e.png)

![image](https://user-images.githubusercontent.com/47166768/222943069-14c711ee-f9f6-43d7-9351-9aa8823a66ea.png)



services -> Email -> 

domain name -> user -> password -> + icon -> set 

![image](https://user-images.githubusercontent.com/47166768/222943161-e2943b2a-aa79-4773-80c1-dcb63e8266a4.png)

![image](https://user-images.githubusercontent.com/47166768/222943193-6d59bf51-c00f-4580-8ab7-101bdf03a799.png)

PCOO -> Desktop -> Email -> 

![image](https://user-images.githubusercontent.com/47166768/222943258-a2283006-9fd4-4afb-9b8d-ee5140b94db4.png)

Save
