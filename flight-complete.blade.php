<!DOCTYPE html>
 <html>
 <head>
    <title>Eimie.Travel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrapHome.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
@extends('layouts.app')
@section('content')
	<div id="main">
 	<div id="content">
 	<h2>Flight Complete</h2><hr>
 	<div class="container">
 		Origin : &nbsp; <?php echo $origin?><br>
 		Destination: &nbsp; <?php echo $destination?><br>
 		Departure Date: &nbsp; <?php echo $departure ?><br>
 		Returning Date: &nbsp; <?php echo $returning ?><br>
 		Type: &nbsp; <?php echo $note ?><br>
 	</div>
 	
 	<form method="POST" action="/add-reservation">
 	{{ csrf_field() }}
 		<br>
 		<button class="btn btn-primary" style="margin-left: 150px;" id="btn2" type="submit">Add Reservation</button>
 	</form>
 	<form method="POST" action="/show-flights" >
 	{{ csrf_field() }}
 		<button class="btn btn-danger" style="margin-left: 350px; margin-top: -60px;" id="btn2" type="submit">Show Reservation</button>
 	</form>
 	 
 	</div>
 	</div>
 	<div class="space" style="padding-bottom: 100px;"></div>
 	@endsection
 </body>
 </html> 	