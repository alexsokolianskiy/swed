<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }
}
