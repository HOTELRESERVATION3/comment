
@extends('hotelreserve.layout')
@section('title','showcomment')
@section('content')
<div>
 @foreach($user as $users)
   <tr>
        <td>Name:{{$users->name}}</td><BR>   
        <td>Comment:{{$users->comment}}</td>   
        <td>Time:{{$users->created_at}}</td></br>
    </tr>
  @endforeach
</div>
@endsection