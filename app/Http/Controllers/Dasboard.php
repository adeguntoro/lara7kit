<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dasboard extends Controller
{
    //
    public function index()
    {
        //
        return view('dashboard.home');
    }
}
