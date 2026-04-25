<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class SedanController extends Controller
{
    public function sedan()
    {
        $cars = Car::where('category', 'Sedan')->get();
        return view('carcategory.sedan', compact('cars'));
    }
}
