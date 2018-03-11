<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function() {
	
	Route::get('students', 'StudentAPIController@index');
    Route::get('students/{student}', 'StudentAPIController@show');
    Route::post('students/store', 'StudentAPIController@store');
    Route::put('students/{student}', 'StudentAPIController@update');
    Route::delete('students/{student}', 'StudentAPIController@destroy');


});


