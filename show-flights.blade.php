<!DOCTYPE html>
<html>
<head>
    <title>Eimie.Travel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style type="text/css">
        table{
            width: 10%;
            text-align: left;
            margin-top: 40px;
        }



    </style>
</head>
@extends('layouts.app')
<body>
@section('content')
<div id="space" style="background-color:#b0e0e6;padding-left: 50px; padding-right: 50px;">
<h2 class="one" style="font-size: 2em; font-family: rockwell; padding-top: 20px;">List of Flights</h2>
	<table class="table table-striped table-bordered table-hover" border="5px;" style="background-color: #00bfff;">
		<thead>
			<th>Origin &nbsp; </th>
			<th>Destination</th>
			<th>Departure Date</th>
			<th>Returning Date</th>
			<th>Note</th>
		</thead>

		<tbody>
			@foreach ($users as $flight)
				<tr>
					<td> <?php echo $flight->origin ?> </td>
					<td> <?php echo $flight->destination ?> </td>
					<td> <?php echo $flight->departure ?> </td>
					<td> <?php echo $flight->returning ?></td>
					<td> <?php echo $flight->note ?></td>
					
					<td width="2%"> 
						<form method="POST" action="/update">
						{{ csrf_field() }} 
							<input type="hidden" name="id" value="{{$flight->id}}">
							<input type="hidden" name="origin" value="{{$flight->origin}}">
							<input type="hidden" name="destination" value="{{$flight->destination}}">
							<input type="hidden" name="departure" value="{{$flight->departure}}">
							<input type="hidden" name="returning" value="{{$flight->returning}}">
							<input type="hidden" name="note" value="{{$flight->note}}">
							<button class="btn btn-warning">Edit</button>
						</form> 
					</td>
					
					<td width="2%">
						<form method="POST" action="/delete/{{$flight->id}}">
						{{ csrf_field() }}	
							<input type="hidden" name="id" value="{{$flight->id}}">
							<input type="hidden" name="origin" value="{{$flight->origin}}">
							<input type="hidden" name="destination" value="{{$flight->destination}}">
							<input type="hidden" name="departure" value="{{$flight->departure}}">
							<input type="hidden" name="returning" value="{{$flight->returning}}">
							<input type="hidden" name="note" value="{{$flight->note}}">
							<button class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
		<form method="POST" action="/add-reservation">
		{{ csrf_field() }}
		<button class="btn btn-primary" type="submit" style="margin-left: 1100px; font-size: 2em;">Add flight</button></form><br><br>
		<div class="space" style="padding-bottom: 350px;"></div></div>
		 @endsection
</body>
</html>