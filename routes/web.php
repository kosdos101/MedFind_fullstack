<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//})
Route::view('/', 'pages.home');
Route::get('/request',[PagesController::class,'request']);
Route::get('/add',[PagesController::class,'add']);