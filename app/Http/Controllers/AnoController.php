<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnoController extends Controller
{
    public function index(){
        return view('pags/home');
    }
}
