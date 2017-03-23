<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model;

class ReservationsController extends Controller
{
    public function show(Request $request) {
        return view('reservation');
    }

    public function create(Request $request) {
    	$name = $request->name;
        $email_add = $request->email_add;
        $adult = $request->adult;
    	$child = $request->child;
        $infantw = $request->infantw;
        $infantwo = $request->infantwo;
        $type = $request->type;

    	$reservation = new Reservation;
        $reservation->name=$name;
        $reservation->email_add=$email_add;
        $reservation->adult=$adult;
        $reservation->child=$child;
        $reservation->infantw=$infantw;
        $reservation->infantwo=$infantwo;
        $reservation->type=$type;
    	$reservation->save();

    	return view('reservation-complete', [
    		'name' => $name,
            'email_add' => $email_add,
            'adult' => $adult,
            'child' => $child,
            'infantw' => $infantw,
            'infantwo' => $infantwo,
            'type' => $type
        	]);

    }

    public function store(CreateFlightRequest $request) {
        // $reservation = new Reservation($request->all());
        // Reservation::create([]);

        Auth:user()->reservation()->create($request->all());
        \Session::flash('flash_message', 'Youre reservation has been sent!');
        return redirect('package');
    }

    public function reservationList() {
        $users = Reservation::orderBy('id')->get();

        return view('show-reservation', [
        'users' => $users]);
    }
}
