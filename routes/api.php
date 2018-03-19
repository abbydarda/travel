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
//
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('admin/v1')->group(function (){
  Route::get('/jurusan','JurusanController@index');
  Route::get('/jurusan/{id}','JurusanController@show');
  Route::post('/jurusan','JurusanController@store');
  Route::put('/jurusan/{id}','JurusanController@update');
  Route::delete('/jurusan/{id}','JurusanController@destroy');
  Route::get('/supir','SupirController@index');
  Route::get('/supir/{id}','SupirController@show');
  Route::post('/supir','SupirController@store');
  Route::put('/supir/{id}','SupirController@update');
  Route::delete('/supir/{id}','SupirController@destroy');
});
