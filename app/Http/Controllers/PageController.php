<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;

class PageController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        return view('index',compact('hospitals'));
    }
}
