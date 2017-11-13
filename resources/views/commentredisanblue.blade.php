@extends('hotelreserve.layout')
@section('title','commentredisanblue')
@section('content')
<div id="view">
<div id="cmnt">
	  <form action="store4" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token() }}">
        <label  for="name"> Name </label>
       <input type="text" name="name" id="name" size="40" width="20" required="required"><br/><br/>
		Comment-><textarea rows="5" column="50" name="comment" id="comment"></textarea>
		<br><br>
		<input type="submit" value="submit" name="submit" id="submit" />
	</form>
   </div>
</div>
 <br> <br><br><br><br><br><br><br><br>

   @endsection