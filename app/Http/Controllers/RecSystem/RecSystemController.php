<?php

namespace App\Http\Controllers\RecSystem;

use App\Http\Controllers\Controller;

class RecSystemController extends Controller
{
    public function index()
    {

    }

    public function description()
    {
        return view('rec-system.desc');
    }
}
