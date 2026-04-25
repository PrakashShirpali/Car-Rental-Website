<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carsPage(): RedirectResponse
    {
        return redirect()->route('allcars');
    }
}
