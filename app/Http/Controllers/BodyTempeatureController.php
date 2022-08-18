<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodyTempeatureController extends Controller
{
    public function create(){
        return view('bodyTemperature.create');
    }

    public function post(){
        return redirect('/home'); 
    }
    public function index(){
        return view('bodyTemperature.index');
    }
}
