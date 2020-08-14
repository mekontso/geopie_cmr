<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// List districts
Route::get('districts', 'DistrictsController@index');

// List single district
Route::get('district/{id}', 'DistrictsController@show');

// Create new district
Route::post('district', 'DistrictsController@store');

// Update district
Route::put('district', 'DistrictsController@store');

// Delete district
Route::delete('district/{id}', 'DistrictsController@destroy');
