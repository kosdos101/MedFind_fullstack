<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){ 
    }
    function request(){
        return view('pages.request');
    }
    function add(){
        return view('pages.add');
    }
}
