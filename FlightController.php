<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Flight;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model;

class FlightController extends Controller
{
    public function index() {
        $flight = Flight::latest('created_at')->created()->get;
        return view('flight.index', compact('container '));
    }

    public function show() {
        $flight = Flight::findOrFail('$id');
        return view('flight.show', compact('container'));
    }

    public function store(Request $request) {
        $this->validate($request, ['origin' => 'required', 
            'destination' => 'required' ,
            'departure' => 'required',
            'returning' => 'required',
            'note' => 'required'
            ]);
        Flight::create($request->all());
        return redirect('flight');
    }

	public function showFlight(Request $request) {
    	return view('flight');
    }
    public function create(Request $request) {
        $origin = $request->origin;
        $destination = $request->destination;
    	$departure = $request->departure;
    	$returning = $request->returning;
    	$note = $request->note;
 
    	$flight = new Flight;
    	$flight->origin=$origin;
    	$flight->destination=$destination;
        $flight->departure = $departure;
        $flight->returning= $returning;
        $flight->note=$note;
    	$flight->save();

    	return view('flight-complete', [
    		'origin' => $origin,
    		'destination' => $destination,
    		'departure' => $departure,
            'returning' => $returning,
            'note' => $note,
        	]);
    }
    public function flightList() {
        $users = Flight::orderBy('id')->get();

        return view('show-flights', [
        'users' => $users]);
    }

    public function Update(Request $request) {
        return view('update', [
            'id' => $request ->id, 
            'origin' => $request ->origin_flight,
            'destination' => $request ->destination_flight,
            'departure' =>$request ->departure_flight,
            'returning' => $request ->returning_flight,
            'note' => $request ->note_flight
            ]);
    } 

    public function ShowEdit(Request $request, $id) {
            $flight = Flight::find($id);
            $flight ->origin = $request->origin_flight;
            $flight ->destination = $request->destination_flight;
            $flight ->departure = $request->departure_flight;
            $flight ->returning = $request->returning_flight;
            $flight ->note = $request->note_flight;
            $flight ->save();
            return redirect('/show-flights');
    }

    public function Delete(Request $request,$id)
    {
        $reserve = Flight::find ($id)->delete();
        return redirect('/show-flights');
    }

}