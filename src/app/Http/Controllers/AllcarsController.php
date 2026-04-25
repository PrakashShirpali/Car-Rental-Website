<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class AllcarsController extends Controller
{
    public function allcars()
    {
        $cars = Car::all();
        return view('carcategory.allcars', compact('cars'));
    }
}
