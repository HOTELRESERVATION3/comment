@extends('hotelreserve.layout')
@section('title','hotelreservation')
@section('content')

 <h1 id="#mycolor"> Registration</h1>


     <div id="#wrapper" align="center">
      <b> Type your information</b>
      <form action="store" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token() }}">
        <table border="5">
        <tr>
        <td  id="#mycolor"align="center"> user Information entry form</td>
        </tr>
        <td>
        <table>
       <label id="#mycolor" for="name"> Name </label>
       <input type="text" name="name" id="name" size="40" width="20" required="required"><br/><br/><br/>
       <label for="email"> Email </label>
       <input type="email" name="email" id="email" size="40" required="required"><br/><br/><br/>
       <label for="password"> Password </label>
       <input type="password" name="password" id="password" size="40" required="required"><br/><br/><br/>
       <label for="address"> Address </label>
       <input type="text" name="address" id="address" size="40" required="required"><br/><br/><br/>
       <label for="phone"> Phone </label>
       <input type="tel" name="phone" id="phone" size="40" required="required"><br/><br/><br/>
       <tr>
        <td> </td>
        <td align="left"> <input type="submit" name="submit" value="Sent" /></td>
        </tr>
       
       </table>
        </form>
        </div>

       
 @endsection