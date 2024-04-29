<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[PagesController::class , 'index']);
Route::get('/request',[PagesController::class,'request']);