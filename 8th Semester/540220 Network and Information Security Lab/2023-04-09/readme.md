Experiment Number: 02 (Recap)

Design and configure a RIP (Routing Information Protocol) By using RIPv1 or RIPv2 dynamic routing protocol also coonnected four LANs

* Experiment name
* objective
* theory
* Router Configuration 
* Cisco Packet Router(Design)
* Ping snapshot
* message passing snapshot

![image](https://user-images.githubusercontent.com/47166768/230755574-41208bd7-7f8c-47bc-9b3e-169aeb70cad4.png)


![image](https://user-images.githubusercontent.com/47166768/230755851-e5279a4b-3e74-4e8f-9203-22a9ee3dc3be.png)

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
Router(config)#interface fastethernet 1/0
Router(config-if)#ip address 192.168.2.1 255.255.255.0
Router(config-if)#no shutdown

Router(config-if)#
%LINK-5-CHANGED: Interface FastEthernet1/0, changed state to up

%LINEPROTO-5-UPDOWN: Line protocol on Interface FastEthernet1/0, changed state to up
exit
Router(config)#interface serial 2/0
Router(config-if)#ip address 10.0.0.1 255.0.0.0
Router(config-if)#no shutdown

%LINK-5-CHANGED: Interface Serial2/0, changed state to down
Router(config-if)#exit
Router(config)#exit
Router#
%SYS-5-CONFIG_I: Configured from console by console









