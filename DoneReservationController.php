<?php 

namespace App\Http\Controller;

use Illuminate\Http\Requests;
use App\Http\Requests;

class DoneReservationController extends Controller 
{
	public function doneReservation (Request $request)
	return view ('reservation-complete');
}