<?php 

namespace App\Http\Controller;

use Illuminate\Http\Requests;
use App\Http\Requests;

class DoneController extends Controller 
{
	public function doneFlight (Request $request)
	return view ('flight-complete');
}