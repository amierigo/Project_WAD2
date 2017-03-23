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

<h1>Fly with the World’s Best Airline <small>Clark -> Japan</small></h1>
<img src="img/jap.jpg">
<div class="content" style="position: absolute; left: 700px; top: 130px;">
	
	<h4>Airline <strong>Emirates</strong></h4>
	<h4>Departure Date <strong>April 2,2017</strong></h4>
	<h4>Returning Date <strong>April 3,2017</strong></h4>
	<h4>Price <i>USD1,400.00 </i>&nbsp;+<i>Php1,620 (Phil. Travel tax)</i></h4>
	<h4>Reservation requirements<i>USD200 (Php10,000.00)</i></h4>
	<h3>Full payment:</h3><strong>On or before Feb. 26, 2017 (less reservation fee)</strong>
	<h3>Remarks</h3><input type="radio"> Non-Refundable<br>
	<input type="radio"> Limited Seats Only<br>
	<input type="radio"> First Come First Serve Basis Only<br>
	<input type="radio"> Send your Valid Passport Copy<br><br>
    <a class="btn btn-primary" href="/reserve">Reserve<span class="glyphicon glyphicon-chevron-right"></span></a>

@endsection
</body>
</html>