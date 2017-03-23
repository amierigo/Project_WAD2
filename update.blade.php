<!DOCTYPE html>
<html>
<head>
    <title>Eimie.Travel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
@extends('layouts.app')
@section('content')
<div id="main" style="padding-left: 200px; padding-top: 20px; padding-bottom: 20px;">
<table class="eimie">
<thead>
	<h3><strong>Flight</h3></strong>
</thead>
<tbody>
<tr><td>
<form method="POST" action= "/edit/{{$id}}">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{$id}} ">
	<input type="text" name="origin_flight" value="{{$origin}}" placeholder="origin"> <br><br>
	<input type="text" name="destination_flight" value="{{$destination}}" placeholder="destination"> <br><br>
	<input type="text" name="departure_flight" value="{{$departure}}" placeholder="departure"> <br><br>
	<input type="text" name="returning_flight" value="{{$returning}}" placeholder="returning"> <br><br>
	<input type="text" name="note_flight" value="{{$note}}" placeholder="one way | roundtrip | multiple"><br><br>
	
	<button type="submit" class="btn btn-danger">&nbsp; Edit</button>
</form>
</td></tr>
</tbody>
</table>

 </div>
<div class="space" style="margin-bottom: 110px;">
	 @endsection
</div>
</body>
</html>

