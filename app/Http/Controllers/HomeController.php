<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;

class HomeController extends Controller
{
    public function carousel()
    {
        $data = Carousel::all(); // Pluralize variable name for consistency
        return view('frontend.home', compact('data'));
    }

}
