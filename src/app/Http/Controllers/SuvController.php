<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class SuvController extends Controller
{
    public function suv()
    {
        $cars = Car::where('category', 'SUV')->get();
        return view('carcategory.suv', compact('cars'));
    }
}
