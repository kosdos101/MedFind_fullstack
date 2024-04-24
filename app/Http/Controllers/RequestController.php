<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    function request(){
        return view('frontend.request');
    }
}
