<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class , 'index']);
Route::get('/Request',[RequestController::class,'request']);
