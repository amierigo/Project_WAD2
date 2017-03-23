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
<img src="img/form.jpg" style="width: 65%; height: 400px; position: absolute; left: 230px; top: 140px;">
<div class="container">
               <div class="panel-body" style="padding-left: 1000px;">
                    You are logged in!
               </div>
<table class="main" style="position: absolute;top:90px;  left: 300px;">
    <tr>    
        <td>
    <form method="post" action="/flight-reservation">
    	{{ csrf_field() }}
        <div id="a" style="color: white;">
    	<div class="eimie" ><label>Origin <br><input type="text" name="origin" placeholder="City or Airport" required></label>&nbsp;&nbsp;&nbsp;&nbsp;<label>Destination<br><input type="text" name="destination" placeholder="City or Airport"  required></label></div>
    	<div class="eimie"><label>Departure Date <br><input type="date" name="departure" placeholder="mm/dd/yy" required style="margin-right: 50px; color: blue;"></label>
    	<label>Returning Date<br> <input type="date" name="returning" placeholder="mm/dd/yy" required style="color: blue;"></label></div><div class="eimie" style="padding-top: 120px;"><label>Type<br><input type="text" name="note" placeholder="eg. oneway, roundtrip or multiple destination" required></label></div>
    	<center><button type="submit" class="btn btn-danger" style="position: absolute; left: 600px; top: 300px;"><strong>Book</strong></button></center><br>
    </form>
        </td>
        </tr>
        </table></div>
        <div class="space" style="padding-bottom: 465px;"></div>
        <!-- @if ($errors->any)
        <ul class="alert alert-danger">
            @foreach ($errors as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif -->
 @endsection

 </div>
 </body>
 </html>