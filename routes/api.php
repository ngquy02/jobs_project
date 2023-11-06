<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/comment', 'App\Http\Controllers\CommentController@index');
Route::get('/comment/{id}', 'App\Http\Controllers\CommentController@show');
Route::post('/comment', 'App\Http\Controllers\CommentController@store');
Route::put('/comment/{id}', 'App\Http\Controllers\CommentController@update');
Route::patch('/comment/{id}', 'App\Http\Controllers\CommentController@update');
Route::delete('/comment/{id}', 'App\Http\Controllers\CommentController@destroy');

Route::get('/companies', 'App\Http\Controllers\CompaniesController@index');
Route::get('/companies/{id}', 'App\Http\Controllers\CompaniesController@show');
Route::post('/companies', 'App\Http\Controllers\CompaniesController@store');
Route::put('/companies/{id}', 'App\Http\Controllers\CompaniesController@update');
Route::patch('/companies/{id}', 'App\Http\Controllers\CompaniesController@update');
Route::delete('/companies/{id}', 'App\Http\Controllers\CompaniesController@destroy');
