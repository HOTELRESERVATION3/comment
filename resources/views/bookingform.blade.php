@extends('hotelreserve.layout')
@section('title','booking')
@section('content')

<div id="view"> <h1><center><marquee behavior="alternate">OnlineReservation</marquee></center></h1></div>
<form action="store3" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token() }}">

	<fieldset>
		<legend>Personal Details:</legend>
		<label for="name">Username:</label><input type="text" name="name" id="name" required autofocus placeholder=" Your username" title="Please enter more than three letters.">
		<label for="email">Email:</label><input type="email" name="email" id="email" required placeholder="your Email" title="please enter valid email">
		<label for="phone">Phone:</label><input type="tel" name="phone" id="phone" required placeholder="Your Phone number" title="please enter the number in format of ##### ### ###">
		<select name="country" id="country" required>
			<option value="">Country</option>
			<option value="bangladesh">Bangladesh</option>
			<option value="us">US</option>
			<option value="uk">UK</option>
			<option value="japan">Japan</option>
			<option value="china">China</option>
		</select>
		</fieldset>
	</br> </br>
		<fieldset>
			<legend>Hotel Place and Name:</legend>

<select name="place" id="place" required>
			<option value="">PlaceName</option>
			<option value="Chittagong">Chittagong</option>
			<option value="Cox'sbazar">Cox'sbazar</option>
			<option value="Dhaka">Dhaka</option>
			<option value="Sylet">Sylet</option>
		</select>
	<select name="hotelname" id="hotelname" required>
			<option value="">HotelName</option>
			<option value="HotelSeaWorld">HotelSeaWorld</option>
			<option value="RedisanBlue">RedisanBlue</option>
			<option value="HotelSufia">HotelSufia</option>
			<option value="HotelGreenland">HotelGreenland</option>
		</select>

		</fieldset>
	
	<br><br>
	<fieldset>
		<legend>Booking Details:</legend>
		<label for="date">Booking Date:</label><input type="date" name="date" id="date" min="2017-10-8">&nbsp;&nbsp;
		<label for="numofguest">Guests:</label><input type="number" name="numofguest" min="1" max="5" required placeholder="Guests">
		<p>Do you want to have meal?</p>
		<label for="yes">Yes</label><input type="radio" name="meals" value="YesMeals">&nbsp;&nbsp;
		<label for="No">No</label><input type="radio" name="meals" value="NoMeals"><br>
		<p>What types of room you want to book?</p>
		<label for="normal">Normal</label><input type="radio" name="room" value="normal">&nbsp;
		<label for="vip">VIP</label><input type="radio" name="room" value="vip"><br><br>
		<p>What type of bed you want?</p>
		<label for="single">SingleBed</label><input type="radio" name="bedtype" value="singlebed">&nbsp;&nbsp;
		<label for="double">DoubleBed</label><input type="radio" name="bedtype" value="doublebed"></br></br>
		<input type="submit" value="submit">
	</fieldset>
</form>
@endsection