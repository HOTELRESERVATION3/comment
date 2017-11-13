@extends('hotelreserve.layout')
@section('title','hotelreservation')
@section('content')
<div id="slide-container">
<img class="slides" src="hotelreserve/image/slides1.jpg"/>
<img class="slides" src="hotelreserve/image/slides2.jpg"/>
<img class="slides" src="hotelreserve/image/slides3.jpg"/>
<img class="slides" src="hotelreserve/image/slides4.jpg"/>
<button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094</button>
<button class="btn" onclick="plusIndex(1)" id="btn2">&#10095</button></div>

<hr color="green">
<h2 color="gray" align="center">TOURIST ZONE GALLERY</h2>
<hr color="green">

<div class="zone-container">
<a href="dhaka.html"><img class="dhaka" src="hotelreserve/image/pic3.jpg"></a>
<div id="textcontainer"><a href="dhaka.html"><h3>Dhaka Zone</h3></a><hr>
Dhaka is the Ancient and Historical place in Bangladesh. There are many historical place<br>
in dhaka. Though it is very crowdy area, it has beauty of busy life. Man there works hard<br>
for their life. You can enjoy there well .....
</div>
</div>

<div class="zone-container">
<a href="coxsbazar"><img class="dhaka" src="hotelreserve/image/pic2.jpeg"></a>
<div id="textcontainer"><a href="coxsbazar"><h3>Cox'sbazar Zone</h3></a><hr>
Chittagong is the Ancient and Historical place in Bangladesh. There are many historical place<br>
in dhaka. Though it is very crowdy area, it has beauty of busy life. Man there works hard<br>
for their life. You can enjoy there well .....
</div>
</div>

<div class="zone-container">
<a href=""><img class="dhaka" src="hotelreserve/image/pic4.jpg"></a>
<div id="textcontainer"><a href="syllet.html"><h3>Syllet Zone</h3></a><hr>
Syllet is the Ancient and Historical place in Bangladesh. There are many historical place<br>
in Syllet. Though it is very crowdy area, it has beauty of busy life.Shahajalal majar is the most wonderfull place.<br> Man there works hard<br>
for their life. You can enjoy there well .....
</div>
</div>

<div class="zone-container">
<a href="hotelagrabad"><img class="dhaka" src="hotelreserve/image/redisanblue.jpg"></a>
<div id="textcontainer"><a href="hotelagrabad"><h3>Chittagong Zone</h3></a><hr>
Chittagong is the Ancient and Historical place in Bangladesh. There are many historical place<br>
in chittagong. Though it is very crowdy area, it has beauty of busy life. Man there works hard<br>
for their life. You can enjoy there well .....
</div>
</div>
@endsection