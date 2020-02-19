<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $properties = \App\models\Property::all()->random(10);     
        return view('vendor.rw-real-estate.home', compact('properties'));
    }
}
