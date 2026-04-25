<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class MpvController extends Controller
{
    public function mpv()
    {
        $cars = Car::where('category', 'MPV')->get();
        return view('carcategory.mpv', compact('cars'));
    }
}
