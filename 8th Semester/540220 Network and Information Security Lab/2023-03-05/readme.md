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

PC1

![image](https://user-images.githubusercontent.com/47166768/222943302-18f1dd2a-a998-43cb-8846-7458d7322867.png)

Save

PC0 -> Email -> Compose 

![image](https://user-images.githubusercontent.com/47166768/222943343-a10eb41b-32f0-4833-a88f-1c5291768086.png)


![image](https://user-images.githubusercontent.com/47166768/222943385-ea24cce5-b79a-4928-bf87-7c92db4bd60d.png)
![image](https://user-images.githubusercontent.com/47166768/222943400-8a4b6a52-8660-4129-a788-9516ac140391.png)
![image](https://user-images.githubusercontent.com/47166768/222943641-fcce4af1-cb27-4ad6-bff1-49ec41bda45e.png)


![image](https://user-images.githubusercontent.com/47166768/222943759-df72064e-7f68-4c76-98b0-84fa7cd11705.png)

![image](https://user-images.githubusercontent.com/47166768/222943814-fa95e702-6f21-4988-ae60-269eb27bc4bd.png)




