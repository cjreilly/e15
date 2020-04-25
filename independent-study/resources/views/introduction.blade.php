<?php
#
# Copyright 2020 Christopher Reilly
#
?>
@extends('master')

@section('title')
{{ $title ?? '' }}
@endsection

@section('head')
<link href='/css/site.css' type='text/css' rel='stylesheet'>
<link href='/css/style.css' type='text/css' rel='stylesheet'>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@endsection

@section('header')
<span class="header container">
  <span class="theme container"><h2>Research Notes</h2></span>
</span>
@endsection

@section('Industry Classification')
<h1 id="industry-classification" class="title">
@component('component.pin',['id'=>'industry-classification'])@endcomponent
Industry Classification
@component('component.filter',['id'=>'industry-classification'])@endcomponent</h1>
<h2 class="subtitle">Classification is important to provide business purpose and assign responsibility.</h2>
<p>Three primary IoT drivers: industry, civil and home.
</p>
<p class="definition"><span>Industry</span>collaboration between private individuals and organizations</p>
<p class="definition"><span>Civil</span>public works, resources, or other works from a recognized governing
body, to include defense.</p>
<p class="definition"><span>Home</span>place of residence.</p>

<p>The <i>Internet of Things</i> is broad evolving terminology to encompass a wide range of internet-enabled things and
their physical form.</p>
<p class="right-floating question box"><span>Are there any other reasons for identifying rigid separations between
disciplines</span></p>
<p class="question"><span>Why is this distinct from cut-and-dry definitions of other kinds of
engineering</span>Rigid definitions of software development and hardware engineering use distinct methodologies. Those
traditional methodologies are developed to succeed in specific tasks.<i class="inline example"><span>waveform
synthesis</span>algorithmic waveform synthesis is important to building application specific integrated
circuits but it is entirely absent from software engineering. Some rigid structures exist to assure quality and others
to make engineering more economical.</i> The IoT unifies, or divides, those disciplines along with a larger business
purpose to put engineering objectives at the forefront in development.</p>

<figure>
<iframe width="1111" height="625" src="https://www.youtube.com/embed/RAv9IIi6e2Y" frameborder="0"
allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<figcaption>
CCTV: World's highest bridge connects Guizhou and Yunnan
</figcaption>
</figure>

<p>Internet-enabled things translate important signals, such as beam tension in a bridge, to recognizable and
contextually appropriate messages. There are many different architectures that can express the same ideas. Some
systems may employ control panels, where an operator can monitor and control. Other systems may employ gestures and
voice for more intuitive interfaces. The IoT expands communication beyond a type-and-monitor setting.</p>
<h3 id="industry-classification.industry">Industry</h3>
<h4>Manufacturing</h4>
<p class="definition"><span>Networked factories</span> electronics are commonly embedded on factory floors. One of the
archetypal examples is the <i>halt</i> button on the factory floor. Embedded electronics can enhance safety and
productivity. More comprehensive implementations provide quantitative data on factory operations. Networked factory
line can provide real-time data and control in manufacturing for managers. Other benefits include security and
visibility.</p>
<h4>Other Industries</h4>
<p class="definition"><span>Farm services and <i>tractor as a service</i></span> global initiatives to enhance food
productivity stimulates development in farming technology. Solutions use a control-and-monitor architecture to move
farm management from the field to an office. There are many enterprise solutions and many one-off examples. <i
class="inline example"><span>cat tracker</span>tracking animal movement can offer some better insights into
animal behavior and farming methodologies.</i> Developing one-off solutions to solve specific problems, like turning a
cat tracker into a cow tracker, can be costly and ineffective.</p>
<h3 id="industry-classification.civil">Civil</h3>
<h4>Transportation</h4>
<p>Traffic control enhances safety on roadways. Embedded electronic devices are successful in creating a small
feedback loop. Smart speed signs are one such example where drivers who are often aware of speed limits only need
reminders to slow down.</p>
<figure class="left-floating box">
<ol>
<li>Evidence: measured, captured, and stored behavior
<li>Relevance: information relayed to individual in the appropriate context
<li>Consequences: individual recalls the consequences of actions
<li>Action: individual recalibrates behavior, decides, and acts
</ol>
<figcaption class="apa">Goetz, T. (2011, June 19). Harnessing the Power of Feedback Loops. Retrieved from
https://www.wired.com/2011/06/ff_feedbackloop/</figcaption>
</figure>
<p>Embedded devices in traffic control improves communication between stakeholders on roadways: motorists, engineers,
law enforcement, and pedestrians.</p>
<h4>Cities and communities</h4>
<p>National and regional agencies can deploy flood control sensors in lowlying areas. It is often an issue to put these
issues on a political agenda. However, there are many instances where flood sensors are part of early warning networks
and weather data. Data collecting agencies can be part of the community feedback loop to empower and advance
communities.</p>
<h3 id="industry-classification.home">Home</h3>
<!--
<p class="right-floating box">
<iframe width="300" height="400" src="https://www.youtube.com/embed/tN-nHA2tp3Y?rel=0" frameborder="0"
allowfullscreen></iframe>
</p>
-->
<p>The Internet of Things re-introduces a service economy into middle-class homes that only existed in previous
centuries for privileged upper-class workers. Many victorian-era houses still have remenants of where cooks and
gardeners were supposed to serve well-to-do families. Cultural and economic transitions have made live-in service
workers less common and moved less privileged families into more comfortable and wealthier settings.
<h4>Appliances</h4>
<h4>Portable Devices</h4>
@endsection

@section('Basic Networking')
<h1 id="basic-networking" class="title">Basic Networking
@component('component.pin',['id'=>'basic-networking'])@endcomponent
@component('component.filter',['id'=>'basic-networking'])@endcomponent</h1>
<h2 class="subtitle">IoT networks provide basic interoperability, clustering, and enable smart features.</h2>
<p class="definition"><span>Service economy</span>an economic sector based on services. Sometimes a distinction in
business between product sales and service sales are important in accounting for revenue. The main reason being that a
service economy is fundamentally based on sales and subscriptions of continued services. The sale of products relies
heavily on manufacturing and retail. IoT modularization connects service economies, such as grocery delivery and
grocers, by selling physical infrastructure to the customer. The customer relies can leverage the physical device as
well as services.</p>
<p class="right-floating box">Why is it important to think about service economies? All we have to do is network the
smart toaster to the bread machine for free toast.</p>
<p>It is necesary to enable connection to service providers in an efficient, secure way. Many IoT manufacturers are
heavily invested in developing protocols for their devices to communicate on traditional network infrastructure - built
to be interoperable with similar controls. It would be ineffective to short a circuit. And likewise, it
would be ineffecient to short a communication path when it is necessary to provide services. For example, the idea of
free bread for a toaster that shorts the bread market is nice at first, but then it is overwhelmed with the responsibilities
of having to automate the grain production to mill the flour. A task which even a smart toaster is ill adapted to
perform.</p>
<figure class="left-floating box">
<!--img src="/images/sankeytoast.PNG" alt="A sankey diagram describes the bread, grain, and toast verticals."/-->
@include('sankey')
<figcaption class="apa">A hypothetical example of competing verticals in developing smart toast.</figcaption>
</figure>
<p class="question"><span>Where to build the bridges</span>There must be a solution to the toast fiasco. Suppose then
there are verticals - bread, grain, toast. There must be bridges to span those production gaps before the toast is on
the table. At this point, it would again be tempting to ignore the subtleties and call the system a random mesh to have
the toast and be finished with it. However, our sankey diagram details the more complicated environment that the
toaster operates within. Hence, returning to the previous examples - the smart farm, smart factory and smart delivery
vehicles - it is apparent that the toaster operates in a very competitive high-stake environment. With some very basic
data visualization, the technology partnerships and protocols are palpable. Perhaps the smart toaster should be
a finely tuned derivative of the penultimate smart panini-producer, equiped to produce both appetizer and entree sizes,
toasted and un-toasted, sliced, diced, and plattered. The decision would be much different that a smart toaster that
bakes the bread, slices, and toasts.</p>
<p></p>
<p>In the hypothetical dirt-to-toast business, it is a good idea to make very careful selections in where to make
investements. An automated irrigation system may work in one place, while a ditch works in another place. To revisit
the vertical again, and to make it more realistic, let's assume that a rotary irrigator runs on a plateau. Soil
saturation is not fantastic, so there is water runoff into a neighboring valley. Dams and irrigation
ditches are in place as flood control measures, in addition to some micro-hydro installation. All of the infrastructure
begins to add up to a system that must be managed, at least cooperatively by joint stakeholders.</p>
<p>Then maybe it is convincing enough to investigate some basic networking.</p>
<figure class="box">
<img src="/images/complex-network.svg" alt="A complex home network diagram."/>
<figcamption class="apa">A logical diagram describing some basic networking concepts.</figcaption>
</figure>
@endsection

@section('IoT Protocols')
<h1 id="iot-protocols" class="title">IoT Protocols
@component('component.pin',['id'=>'iot-protocols'])@endcomponent
@component('component.filter',['id'=>'iot-protocols'])@endcomponent</h1>
<h2 class="subtitle">Diverse communication protocols enable communication.</h2>
@endsection

@section('Interoperability')
<h1 id="interoperability" class="title">
@component('component.pin',['id'=>'interoperability'])@endcomponent
Interoperability
@component('component.filter',['id'=>'interoperability'])@endcomponent</h1>
<h2 class="subtitle">Interoperabilty features and services bridge IoT devices and device clusters.</h2>
@endsection

@section('Theory')
<h1 id="theory-and-application" class="title">Theory and Applications
@component('component.pin',['id'=>'theory-and-application'])@endcomponent
@component('component.filter',['id'=>'theory-and-application'])@endcomponent</h1>
<h2>Examples applied in various market sectors</h2>
@endsection


@section('content')
@foreach ($section as $S)
  @yield($S)
@endforeach

@endsection
