<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function package()
    {
        return view('package');
    }

    public function flight() {
        return view('flight');
    }

    public function inquire() {
        return view('inquire');
    }

     public function sao(Request $request) {
        return view('sao');
    }

    public function japan(Request $request) {
        return view('japan');
    }

    public function dubai(Request $request) {
        return view('dubai');
    }

    public function singapore(Request $request) {
        return view('singapore');
    }

    public function florida(Request $request) {
        return view('florida');
    }

    public function korea(Request $request) {
        return view('korea');
    }

    public function paris(Request $request) {
        return view('paris');
    }
}
