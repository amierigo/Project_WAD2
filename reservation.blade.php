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
<!--  -->
<div class="container">
               <div class="panel-body" style="padding-left: 1000px;">
                    You are logged in!
               </div>

<table class="eimie" style="position: absolute;top:110px; left: 230px;"> 
<img src="img/form.jpg" class="one" style="position: absolute; left: 130px; width: 80%; height: 400px;">
    <tr>    
        <td>
    <form method="post" action="/make-reservation">
    	{{ csrf_field() }}<div id="a" style="color: white;">
    	<div class="eimie" style="color: blue;"><input type="radio">Round Trip
        <input type="radio">One Way</div>
        <div class="eimie"><label>Name:<br><input type="text" name="name" placeholder="name" required></label></div>
        <div class="eimie"><label>Email Address:<br><input type="text" name="email_add" placeholder="email" required></label></div>
        <div class="eimie" style="color: black"><label>Adult<br><input type="number" name="adult" ></label>
        <label>Child<br><input type="number" name="child" ></label>
        <label>Infant W/ Seat (0-23mo)<br><input type="number" name="infantw" ></label> 
        <label>Infant W/o Seat (0-23mo)<br><input type="number" name="infantwo" ></label></div>
        <div class="eimie" style="color: black" ><h4></h4>Class</h4><br><select name="type">
            <option value="premium"><p>Premium Economy</p></option>
            <option value="business"><p>Business Class</p></option>
            <option value="first"><p>First Class</p></option>  
        </select></div>
    	<center><button type="submit" class="btn btn-danger" style="margin-left: 600px; "><strong>Book</strong></button></center><br>
    </form>
        </td>
        </tr>
        </table></div>
       <!--  @if ($errors->any)
        <ul class="alert alert-danger">
            @foreach ($errors as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif -->
            <div class="eimie" style="padding-bottom: 480px;"></div>


 </div>
  @endsection 
 </body>
 </html>