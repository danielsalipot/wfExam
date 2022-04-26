<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/home','App\Http\Controllers\PagesController@Home');
Route::get('/view','App\Http\Controllers\PagesController@View');
Route::get('/create','App\Http\Controllers\PagesController@Create');

Route::resource('/employee','App\Http\Controllers\EmployeesController');
