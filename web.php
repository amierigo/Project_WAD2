<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', function() {
	return view('welcome');
});

// Route::controllers([
// 		'auth' => 'Auth\AuthController',
// 		'password' => 'Auth\PasswordController',
//  	]);
Route::get('admin', ['middleware' => 'manager', function(){
	return 'this page may be only be viewed by admins';
}]);

Route::get('/package', 'HomeController@package');
Route::get('/flight', 'HomeController@flight');
Route::get('/inquiries' , 'HomeController@inquire');
Route::get('/sao', 'HomeController@sao');
Route::get('/japan', 'HomeController@japan');
Route::get('/dubai', 'HomeController@dubai');
Route::get('/singapore', 'HomeController@singapore');
Route::get('/florida', 'HomeController@florida');
Route::get('/korea', 'HomeController@korea');
Route::get('/paris', 'HomeController@paris');
Route::get('/reserve', 'ReservationsController@show');
Route::get('/make-reservation' ,'ReservationsController@create');
Route::post('/make-reservation' ,'ReservationsController@create');
Route::get('/reservation-complete', 'DoneReservationController@doneReservation');

Route::get('/flight', 'FlightController@showFlight');
Route::get('/flight-reservation', 'FlightController@create');
Route::post('/flight-reservation', 'FlightController@create');
Route::get('/flight-complete', 'DoneController@doneFlight');
Route::post('/add-reservation', 'FlightController@showFlight');
Route::get('/show-flights', 'FlightController@flightList');
Route::post('/show-flights', 'FlightController@flightList');
Route::post('/update', 'FlightController@Update');
Route::post('/edit/{id}', 'FlightController@ShowEdit');
Route::post('/delete/{id}', 'FlightController@Delete');





