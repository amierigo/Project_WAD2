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

<h1>ROUND TRIP FARE <small>Manila -> Paris</small></h1>
<img src="img/par.jpg">
<div class="content" style="position: absolute; left: 700px; top: 150px;">
	
	<h4>Airline <strong>ETHIPOPIAN AIRLINE </strong></h4>
	<h4>Departure Date <strong>April 4,2017</strong></h4>
	<h4>Returning Date <strong>April 14,2017</strong></h4>
	<h4>Price <i>US$850.00</i>&nbsp;+<i>PHP 1,620</i></h4>
	<h3>Remarks</h3><input type="radio"> Non-Refundable<br>
	<input type="radio"> Rebookable Subject To Rebooking Penalties <br>
	<input type="radio"> Book & Buy<br>
	<input type="radio"> Limited Seats Only<br>
	<input type="radio"> First Come First Serve Basis Only<br>
	<input type="radio"> Send your Valid Passport Copy<br><br>
    <a class="btn btn-primary" href="/reserve">Reserve<span class="glyphicon glyphicon-chevron-right"></span></a>

@endsection
</body>
</html>