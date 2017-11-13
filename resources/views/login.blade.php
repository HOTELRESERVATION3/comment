@extends('hotelreserve.layout')
@section('title','hotelreservation')
@section('content')
 <h1 id="#mycolor"> Login</h1>
<body>

     <div id="#wrapper" align="center">
      <b> Type your information</b>
      <form action="store1" method="POST">
      <input type="hidden" name="_token" value="{{csrf_token() }}">       
        <table border="5">
        <tr>
        <td  id="#mycolor"align="center"></td>
        </tr>
        <td>
        <table>
       <label id="#mycolor" for="name"> Name </label>
       <input type="text" name="name" id="name" size="40" width="20" required="required"><br/><br/><br/>
       <label for="password"> Password </label>
       <input type="password" name="password" id="password" size="40" required="required"><br/><br/><br/>
       <tr>
        <td> </td>
        <td align="left"> <input type="submit" name="submit" value="login" /></td>
        </tr>
       
       </table>
        </form>
        </div> 
</body>
 @endsection