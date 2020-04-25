# Independent Study
+ By: *Christopher Reilly*
+ Production URL: <http://independent-study.christopherreilly.me>

Outline:
+ Issues
+ Types of IoT
  + Industrial
  + Civil
  + Home
+ Protocols
  + Bluetooth
  + BLE
  + ZigBee
  + Z-Wave
  + 6LoWPAN
  + 3G & 4G
  + 5G
  + LTE Cat 0,1,3
  + LTE-M1
  + NB-Iot
  + NFC
  + RFID
  + SigFox
  + LoRaWAN
  + ANT/ANT+
  + EnOcean
  + NB-IoT
+ Communication bands
+ Hardware
+ Basic networking
  + Routing
  + Switching
  + Basic security
+ Interoperability

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

### Home


### Civil


### Industry


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

|   | Layer           |  Use                        |
|---| -------------   | --------------------------- |
| 7 | Application     | File transfer, E-mail, HTTP |
| 6 | Presentation    | Data formatting, ASCII, JPG, GIF  |
| 5 | Session         | Set-up, exchange, tear-down; SQL and RPC |
| 4 | Transport       | Error recovery, flow control; TCP and UDP |
| 3 | Network         | Packet switching and routing; IP and AppleTalk |
| 2 | Data link (MAC) | Media access layer; access and data permission |
| 2 | Data link (LLC) | Logical link layer; frame synchronization |
| 1 | Physical        | Electrical and mechanical bit stream |

[The 7 Layers of the OSI Model] (https://www.webopedia.com/quick_ref/OSI_Layers.asp)

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

[X10Linked] (https://www.x10.com/)

## Network tools packaged with standard operating systems

`ipconfig`/`ifconfig` - display logical interfaces, IP addresses, and network masks



This is a PHP web application that displays a set of notes. The notes are formatted and include controls to make it
easier to reference them.

The triangle character on the right-hand side of some links is a filter control.

The home character in the navigation bar is a control to return to the home page.

Links reference specific sections on the page. If the section is not visible the link does nothing.

The web application builds the index from a JSON database.

The web user can pin sections with the pin character. Pins are links to places within the site that stick to the current
session and page context. The web user can clear pins with the clear character.

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
+ Interview with Kevin Ashton
<https://www.smart-industry.net/interview-with-iot-inventor-kevin-ashton-iot-is-driven-by-the-users>
+ Internet of Things Solutions and Services <https://www.cisco.com/c/en/us/solutions/internet-of-things/overview.html>
+ Laravel Documentation <https://laravel.com/docs>
+ PHP Common Documentation <https://www.php.net>
+ W3 HTML Documentation <https://www.w3.org/TR/html52/>
+ W3 CSS Documentation <https://www.w3.org/TR/css-2018/>
+ CSCI E-15 Web Server Frameworks with Laravel/PHP <https://hesweb.dev/e15/>

## Notes for instructor
