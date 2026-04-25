<?php

namespace App\Http\Controllers;

use App\Models\Whychooseus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        $chooses = Whychooseus::all();
        return view('navlinks.home', compact('chooses'));
    }
}
