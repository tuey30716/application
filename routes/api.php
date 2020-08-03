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


Route::get('/', 'ApiController@get_all_emp');

Route::get('employee/{id}', 'ApiController@get_emp_by_id');

Route::post('employee', 'ApiController@create_emp');

Route::put('employee/{id}', 'ApiController@update_emp');

Route::delete('employee/{id}', 'ApiController@delete_emp');