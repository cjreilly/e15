# Independent Study
By: *Christopher Reilly*

Outline:
+ Issues
+ Types of IoT
+ Industrial
+ Civil
+ Home
+ Protocols
+ Bluetooth
+ BLE
+ LoRaWAN
+ 6LoWPAN
+ ANT/ANT+
+ 5G
+ LTE-M
+ NB-Iot
+ Basic networking

# IoT dimensions

IoT technology presents a significantly distinct qualities from at-home computing trends. There is a multitude of
protocols, communication bands, hardware, and many other dimensions to the IoT matrix. Technology product clusters
interact as interoperable systems and discrete segmented systems. There are numerous models to explain how those
technology trends interact in order to present the systems to stakeholders. This document describes IoT as it organized
under three primary drivers: industry, civil, and home.

# Three primary drivers

__Industry__ : collaboration between private individuals and organizations

__Civil__ : public works, resources, or other works from a recognized governing body

__Home__ : private places of residence and private citizens


IoT is distinctly different from traditional cut-and-dry engineering. Rigid software development and hardware
engineering definitions use distinct methodologies. Those methodologies succed in very specific tasks. For example,
waveform synthesis, the algorithmic analysis of electrical waves, is important to building integrated circuits but it is
entirely absent from software engineering. Similarly, much software engineering is focused heavily on developing
business practices. Some rigid structures exist to assure quality and others to make engineering more economical. The
IoT unifies, or divides, those disciplines together with business purpose to put engineering objectives at the
forefront in development.

Internet-enabled things translate important signals, such as beam tension in a bridge, to contextually appropriate
messages. Identifying this signal propagation is important in improving overall system performance. Value adding systems
enhance those signals with context information. The terminal end may employ a control panel, where an operator can
monitor and control. Other terminal ends may employ gestures and voice for more intuitive systems. In this way the
system is expanded beyond a type-and-monitor setting.

### Industry

Industrial IoT devices are more difficult to categorize as one would categorize things in a house. Potentially that is
caused in part by specialized nature where they operate. Large moving metalic parts, for example, may produce electric
fields and false messages. Similarly, stationary concrete and metal objects can block wireless transmissions.

Industrial IoT may be integrated as purpose-specific solutions to large scale problems. But the gains are not lost.
Real-time data from heavy machinery is one benefit in industrial IoT. Other gains include safety and reliability. The
additional effort in understanding the operational environment and collaborating with stakeholders is time not lost.

### Civil

Civil IoT is device and infrastructure management in both licensed and unlicensed spectrums. These devices often benefit
from economies of scale. A large investment in planning and construction effort is possible because of the long-term
perceived benefits and the positive effect on many people.

[Infrastructure in mountain roads](https://youtu.be/4icF0ULLcuo)

Civil IoT has an additional advantage by being tied to electric grids or even functioning on microgrids. But not
everything is as easy as putting up a sign post with an civil IoT device on top. Climate considerations are important.
For example, a solar cell might keep a battery charged on a 4G gateway to report road conditions in a remote location.
But if that location is in a lowlying valley with temperatures that regularly reach 15 to 20 degrees then the damage is
twofold. First the solar cell is much less effective. And second the battery may never charge due to low temperatures.

[Libelium engineer demonstrates smart roads](https://youtu.be/m-C1gmi1du0)

The net effect is that these devices require additional planning and regulation so that they can produce better results.
Collaboration and teamwork is important.

### Home


Home IoT devices are are often limited to low band and unrestricted frequencies. Most consumer home IoT devices use
either Bluetooth or WiFi to communicate. Both offer unique benefits.

Low power, low band devices that use radios like ANT/ANT+ are especially popular because of their meshing capability, short
range, and low power. The combination of those three elements makes those devices well suited for the personal area network 
__PAN__ classification without greatly interfering with unrelated networks. Both ANT and Bluetooth have the benefit
of much lower administrative costs. Meshing and point-to-point communications with these devices eliminates the
middleware and hardware from basic requirements.

WiFi-enabled and wired IoT devices enable lower latency and higher bandwidth communication with remote resouces. Home
IoT devices that utilize the 802.11 protocols are almost guaranteed to communicate with a cloud service provider for
enhanced services. Some exceptions may be devices in __ad-hoc mode__, which communicate on wireless 802.11 protocols but do
not require a router to communicate with end devices.

Despite the specific technology implemented in the home, there is almost always a possibility to set up gateway routers
and forward data over IP networks. Gatway routing blends local and personal area networks with broad device management
and cloud computing benefits. Some smart IoT devices blend many different radio technologies into a single device to
bridge the networks. Large cloud service providers commonly sell those devices as smart all-in-one home solutions
to sell in-home services.

Home IoT device manufacturers are keen to acknowledge privacy concerns. Privacy is a word with two definitions in home
IoT. First is the lower radio performance due to clogged up airwaves and noisy interference like static on a poorly
tuned radio. Second is the negative afterimage of careless technology spilling private information to neighbors.
Industry and non-profit NGOs have been drivers in standardizing and enforcing solutions to both those concerns in Home
IoT consumer devices.

# Basic networking

## Introduction

Networking thrives on service economies. Services produce and consume signals that travel as electrical waves or light
pulses. Sometimes there is a distinction between product sales and service sales that are important for accounting and
mangement. A service economy is fundamentally based on sales and subscriptions of continued services. Product sales rely
heavily on manufacturing and retail. Iot modularizaion connects service economies, such as grocery delivery and grocers,
by selling physical infrastructure to the customer. The customer can leverage the physical device as well as services.

Connects between service providers and consumers are efficient and secure. Device manufacturers are invested heavily in
protocols for device communication on traditional network infrastructure - built to be interoperable with similar
controls. It is often ineffective to short a circuit and it would be inefficient to short communications or value
chains. Taking the idea of a toaster networked to a grain producer is effective at first; the bread is free. But
toasters consume bread and not grain. A baker must exist somewhere in the network, and if the toaster is to continue
operating someone needs to make the bread. All but the most well-adpated toasters can assume those responsibilities.

The question remains, where to build bridges. There must be a solution to the toast fiasco. There is a trend in
self-organizing networks, derived in part from an idea that networks grow themselves based in these self-organizing mesh
structures. There are also methodical approaches to networking. Each of these methods add inherent qualities to network
behavior.

Consider again the toast business - particularly in adding the quality objective to secure the entire production from dirt to table. The
toaster is again overwhelmed with the networking tasks. Instead the networking task is offloaded to specific hardware:
bridges, switches, routers, and other specialized equipment. The actual device ecosystem for toasting is then better
suited to perform its specialized task. Additional devices in the toast system can add more quality and control. For
example, a register terminal for sales, a smart power system, renewable micro-grid infrastructure, network attached
storage for backup, routers, and firewalls.

## Terms and concepts

### OSI Model

The OSI model is widely studied because it is applicable to much of the home and office environments. Each part in the 7
layer OSI model performs a specific task of encapsulating a signal transmission from one compatible machine to another
using TCP/IP.

|   | Layer           |  Use                        | Other Terms |
|---| -------------   | --------------------------- | ----- |
| 7 | Application     | File transfer, E-mail, HTTP |
| 6 | Presentation    | Data formatting, ASCII, JPG, GIF  |
| 5 | Session         | Set-up, exchange, tear-down; SQL and RPC |
| 4 | Transport       | Error recovery, flow control; TCP and UDP |
| 3 | Network         | Packet switching and routing; IP and AppleTalk |
| 2 | Data link (MAC) | Media access layer; access and data permission |
| 2 | Data link (LLC) | Logical link layer; frame synchronization |
| 1 | Physical        | Electrical and mechanical bit stream | PHY (physical) |

[The 7 Layers of the OSI Model](https://www.webopedia.com/quick_ref/OSI_Layers.asp)

The OSI Model is also comprehensive in accomodating different protocols, including AppleTalk.


There is a multitude of terms and concepts
(https://www.professormesser.com/). This is only a condensed list for our purposes.

*Switch* - layer 2/3 packet switch connects systems on the same broadcast domain.
*Router* - layer 3 packet routing separates broadcast domains.
*Firewall* - rule-based traffic filtering
*Bridge* - breaks up collision domains
*Network Interface Card* - hardware extension card that implements features of the OSI model
*Wireless Access Point* - a wireless router configured to either route or repeat traffic

### X10

X10 is a networked system separate from ethernet, fiber optic, and telephone communication lines. It is a standard in
use in some systems for security and automation. X10 operates on 60Hz/120V home electrical lines. The X10 industry
protocol, a sequence of codes to receive and transmit on the wire, is adaptable for other voltages.

[X10 Linked](https://www.x10.com/)

Many X10 devices are accomponied by in-line power filters. A power filter is an electrical filter designed specifically
for the local voltage and frequency requirements. Hobbyists can measure frequency variations using an AM radio or a
Graham-Stetzer Meter.
[Dirty Electricity Filters](https://emfacademy.com/dirty-electricity-filter-guide/)

### Bluetooth

Center frequency: 2.44GHz


Bluetooth is another layered protocol nicknamed __the cable replacement protocol__ because it emulates RS232 over a
different physical medium. Bluetooth protocol definitions describe various radios that compose the basebadn physical
layer. The definition includes link manager protocol __LMP__ to control connections and logical link control and
adaptation protocol __L2CAP__. Bluetooth uses LMP to establish connections between devices and L2CAP to establish a
foundation for data transfer. Audio is listed as an __adopted protocol__, or the bits on the baseband. TCP/IP and PPP
are adopted on top of l2CAP. TCP/IP and PPP can use Bluetooth as a physical layer.

The implications of more mature versions of Bluetooth is that it makes it possible to create a 2 Mbps LAN compared to
1Mbps. Many consumers with Bluetooth enabled laptops will find it is easy to program a bluetooth radio to send
broadcasts and other devices to connect to connect to it as they would to a wireless LAN interface. The center
frequency is 2.44 GHz. Bluetooth low energy __BLE__ is part of the Bluetooth protocol. BLE uses less power.

[Bluetooth Specifications](https://www.bluetooth.com/specifications/protocol-specifications/)

### LoRaWAN


Center frequencies: 18 channels between 865.20Mhz and 915MHz

![LoRa lower channels](https://www.rfwireless-world.com/images/Lora-868-channels.jpg)
![LoRa upper channels](https://www.rfwireless-world.com/images/Lora-900-channels.jpg)
__LoRa channels list from RF Wireless World__

LoRaWAN is the low power wide area networking protocol. LoRaWAN-enabled devices communicate with gateway routers to
connect to an ethernet network. LoRaWAN networks are secured with SSL to enable secure communication. They are
relatively new and many times the gateways require certification or registration with a regulator like the FCC.

Regulation simplifies requirements for deploying devices that use radio communication. It helps to reduce interference
and improve signal quality and safety. Some people cite frequency bands and others cite center frequency to the same
effect. LoRa operates in the 902-928 MHz band. That band has also been used in defense applications.

*LoRa* - long range on a proprietary LoRa protocol using the 902-928 MHz band

*WAN* - wide area network

A corporate alliance called the LoRa Alliance publishes specifications for LoRa with the intent to improve
interoperability. The specification includes center frequencies for the EU, US, and othe regions. The 2017 LoRaWAN 1.1
improves protocol security with new session keys and replay attack prevention. It also includes additional MAC commands
for endpoint devices to communicate with gateways.

[LoRa](https://lora-alliance.org/resource-hub/lorawanr-specification-v103)

[LoRaWAN](https://www.thethingsnetwork.org/docs/lorawan/architecture.html)

### 6LoWPAN

6LoWPAN as the name suggests is LoRaWAN enabled for IPv6 for personal area networks.


### ANT/ANT+

Center frequency: 2.46GHz

Adaptive Network Technology, ANT and ANT+, uses a 2.46GHz center frequency. ANT is popularized in fitness applications
like fitness bicycles and stride counters and home health. ANT devices can communicate on a number of short-range
low-power network configurations. They can be public, shared between devices, or private. The combination of short
range, descriminating configurations, and low power networks makes ANT a respectful protocol on the 2.4GHz band.


[ANT/ANT+](https://www.thisisant.com/developer/ant-plus/ant-plus-defined/)

### 5G

Center frequencies: 25.875GHz, 40.25GHz, 46.25GHz, 47.7GHz, 68.75GHz


The 5G cell network is the next generation for wireless consumer technology. The entire frequency band considered for
allocation is between 24GHz and 300GHz in early stages. It has a higher frequency than previous generations and hence a
shorter transmission distance.

![5G Protocol Stack](https://www.rfwireless-world.com/Tutorials/5G-network-architecture.html)
__5G network architecture from RF Wireless World__

The protocol stack splits the network layer and adds software defined networking capabilities. 5G networks are more
virtualized and rely on cloud computing.

5G radio towers also encorporate technology for beamforming to create narrower
beams between towers and devices. The effect is that 5G towers can support more devices, which is important to the expected
growth in the number of consumer devices. Higher frequency waves are affected more by factors like weather, physical
obstructions, and distance.

[Millimeter wave](https://searchnetworking.techtarget.com/definition/millimeter-wave-MM-wave)

[5G frequency bands announced at WRC-19](https://news.itu.int/wrc-19-agrees-to-identify-new-frequency-bands-for-5g/)

### LTE-M

Long Term Evolution 4G M, or LTE-M, a protocol for low power devices to communicate on 4G networks. Dense networks of
LTE-M devices do not utilize much bandwidth because the maximum data rate on each device is 100 kb/s. If mobile phone
users migrate to 5G services then 4G networks will have greater bandwidth for denser IoT device networks. LTE-M does not
define any specific frequencies other than those defined by LTE networks. The protocl is in use to create low power wide
area networks using existing 4G radios.


[LTE-M described by LinkLabs](https://www.link-labs.com/blog/what-is-lte-m)



### NB-IoT

Narrowband IoT is another protocol for low power wide area networking. The protocol uses existing GSM networks. It is
a stack of protocols consisting of 6 layers - PHY, MAC, RLC, PDCP, RRC, and NAS. The physical layer uses orthogonal
frequency division multiple access, or OFDMA, to make more effective use of the frequency band. The MAC layer maps and
prioritizes traffic between physical channels, logical channels, and transport channels. The Radio Link Control __RLC__ layer
ommunication closer the way TCP/IP and UDP deliver traffic; it uses a transparent mode for voice, unacknowledged mode
establishes communication closer the way TCP/IP and UDP deliver traffic; it uses a transparent mode for voice, unacknowledged mode
for streaming, and acknowledged mode for data.

The Packet Data Convergence Protocol __PDP__ attaches packet headers on data as it transfers information between the RLC
layer and the IP layer. It also performs other functions to improve quality and control sequenced data delivery. The
Radio Resource Control __RRC__ layer establishes a 3-way handshake to establish connections and transfer data.


![NB-Iot Protocol Stack](https://www.rfwireless-world.com/images/NB-IoT-Protocol-Stack.jpg)


[LTE-M and NB-IoT Protocols](https://www.rfwireless-world.com/Terminology/LTE-NB-IoT-Protocol-Stack.html)




## Network tools packaged with standard operating systems

`ping` - test reachability and report latency

`tracert` - trace the route to a destination IP address

`ipconfig`/`ifconfig` - display logical interfaces, IP addresses, and network masks

`netstat` - display active network connections

`nslookup`/`dig` - query the DNS server to translate an IP address to a hostname or hostname to IP address

`tcpdump`/`windump` - dump contents of tcp header information that arrive to the system application


## Outside resources
+ Creating more efficient agriculture and forestry practice using IoT
<https://futureiot.tech/creating-a-more-efficient-agriculture-and-forestry-practice-using-iot/>
+ IoT for cows
<https://www.techrepublic.com/article/iot-for-cows-4-ways-farmers-are-collecting-and-analyzing-data-from-cattle/>
+ Complete list of wireles IoT network protocols <https://www.link-labs.com/blog/complete-list-of-iot-network-protocols>
+ Startup innovates by developing IoT technology for forestry sector
<https://phys.org/news/2018-07-startup-iot-technology-forestry-sector.html>
+ Purdue University partners with HPE and Aruba in digital-agriculture initiative to fight world hunger
+ The internet of wild things
<https://www.techrepublic.com/article/the-internet-of-wild-things-technology-and-the-battle-against-loss-and-climate-change/>
+ Smart buildings: how Iot technology aims to add value for real estate companies
+ Verizon NASPO ValuePoint <https://enterprise.verizon.com/solutions/public-sector/state-local/contracts/naspo/>
+ Tomorrow's cities: evolving from "smart" to adaptive
<https://www.ciena.com/insights/articles/Tomrrows-cities-evolving-from-smart-to-adaptive.html>
+ Harnessing the Power of Feedback Loops <https://www.wired.com/2011/06/ff_feedbackloop/>
+ World's highest bridge connects Guizhou and Yunnan <https://youtu.be/RAv9lli6e2Y>
+ Interview with Kevin Ashton <https://www.smart-industry.net/interview-with-iot-inventor-kevin-ashton-iot-is-driven-by-the-users>
+ Internet of Things Solutions and Services <https://www.cisco.com/c/en/us/solutions/internet-of-things/overview.html>
+ 7 Layers of the OSI Model <https://www.webopedia.com/quick_ref/OSI_Layers.asp>
+ X10 Linked <https://www.x10.com/>
+ Dirty Electricity Filters <https://emfacademy.com/dirty-electricity-filter-guide/>
+ Bluetooth Specifications <https://www.bluetooth.com/specifications/protocol-specifications/>
+ RF Wireless World <https://www.rfwireless-world.com>
+ LoRa Alliance <https://lora-alliance.org/resource-hub/lorawanr-specification-v103>
+ The Things Network <https://www.thethingsnetwork.org/docs/lorawan/architecture.html>
+ This is ANT <https://www.thisisant.com/developer/ant-plus/ant-plus-defined/>
+ Tech Target <https://searchnetworking.techtarget.com/definition/millimeter-wave-MM-wave>
+ ITU <https://news.itu.int/wrc-19-agrees-to-identify-new-frequency-bands-for-5g/>
+ Link Labs <https://www.link-labs.com/blog/what-is-lte-m>

## Notes for instructor

This is a PHP web application that displays a set of notes. The notes are formatted and include controls to make it
easier to reference them.

The triangle character on the right-hand side of some links is a filter control.

The home character in the navigation bar is a control to return to the home page.

Links reference specific sections on the page. If the section is not visible the link does nothing.

The web application builds the index from a JSON database.

The web user can pin sections with the pin character. Pins are links to places within the site that stick to the current
session and page context. The web user can clear pins with the clear character.

