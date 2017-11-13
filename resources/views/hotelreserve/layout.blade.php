<html lang="en">
<head>
	 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>

<link href="hotelreserve/css/hotel.css" rel="stylesheet">
</head>
<body>
	<header>
<div class="header">
<img class="logo" src="hotelreserve/image/ebicon.PNG"/>
<h1><i>HotelReservation</i></h1>
<h5>[MAKE THE JOURNEY BEST]</h5>
</div>
<hr color="green">
<div class="nav-container">

<ul>
<li><a href="hotellist"><b>Home</a></></li>
<li><a><b>About</b></a>
<ul>
<li><a>Tourist Zone</a></li>
<li><a href="aboutus">About us</a></li>
<li><a href="offers">Offers</a></li>
</ul>
</li>
<li><a><b>Reservation</b></a>
 <ul>
<li><a href="registration">Registration</a></li>
<li><a href="namelist">View the hotels</a></li>
</ul>

</li>
<li><a><b>Contact</b></a>
<ul>
<li><a href="mailto:mizanr122@gmail.com">E-Mail</a></li>
<li><a>Phone</a></li></ul>
</li>
<li><a><b>Profile</b></a>
<ul>
<li><a>View Your profile</a></li>
<li><a>Privacy</a></li>
</ul>
</li>
</ul>

<div class="image"><h2>Advance Your Lifestyle & Make A New World<br>Share Your Feeling<br>Think<br>Plan<br>Go</h2></div>
</div>
</header>
@yield('content');
<footer>
	<h4 align="center"><a href="https://web.facebook.com/md.emran.9678">Contact Us</a></h4>
</footer>
</body>

<script>
var index=1;

function plusIndex(n){
index=index+1;
showImage(index);}

showImage(1);

function showImage(n){
var i;
var x=document.getElementsByClassName("slides");
if(n>x.length){index=1};
if(n<1){index=x.length};

for(i=0;i<x.length; i++){
x[i].style.display="none";}

x[index-1].style.display="block";
}

</script>
</html>