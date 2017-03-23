<!DOCTYPE html>
<html>
<head>
	<title>Eimie.Travel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
@extends('layouts.app')
@section('content')

<h1>Fly with the World’s Best Airline <small>Clark -> Dubai</small></h1>
<img src="img/dubai.jpg">
<div class="content" style="position: absolute; left: 700px; top: 150px;">
	
	<h4>Airpline <strong>Emirates</strong></h4>
	<h4>Departure Date <strong>April 2,2017</strong></h4>
	<h4>Returning Date <strong>April 12 or 3,2017</strong></h4>
	<h4>Price <i>US$1100.0</i>&nbsp;+<i>PHP 1,620</i></h4>
	<h3>Remarks</h3><input type="radio"> Non-Refundable<br>
	<input type="radio"> Non-rebookable<br>
	<input type="radio"> can be transferred as long as ticket is not yet issued<br>
	<input type="radio"> Limited Seats Only<br>
	<input type="radio"> First Come First Serve Basis Only<br>
	<input type="radio"> Send your Valid Passport Copy<br><br>
    <a class="btn btn-primary" href="/reserve">Reserve<span class="glyphicon glyphicon-chevron-right"></span></a>

@endsection
</body>
</html>