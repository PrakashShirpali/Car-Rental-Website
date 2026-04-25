<?php

namespace App\Http\Controllers;

use App\Models\Navlink;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function layoutPage()
    {
        $navlinks = Navlink::all();
        return view('layout', compact('navlinks'));
    }
}
