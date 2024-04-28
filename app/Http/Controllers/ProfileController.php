<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(){
        return view('layouts.home');
    }
    function request(){
        return view('layouts.request');
    }
}

