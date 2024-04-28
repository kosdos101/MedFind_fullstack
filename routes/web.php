<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[ProfileController::class , 'index']);
Route::get('/request',[ProfileController::class,'request']);