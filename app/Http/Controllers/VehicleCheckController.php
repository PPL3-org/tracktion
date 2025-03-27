<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleCheckController extends Controller
{
    public function index()
    {
        return view('inspections.index');
    }
}
