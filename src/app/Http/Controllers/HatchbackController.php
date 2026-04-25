<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HatchbackController extends Controller
{
    public function hatchback()
    {
        $cars = Car::where('category', 'Hatchback')->get();
        return view('carcategory.hatchback', compact('cars'));
    }
}
