<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckController extends Controller
{
    public function index()
    {
        return view('trucks.index');
    }

    public function create()
    {
        return view('trucks.crete');
    }
}
