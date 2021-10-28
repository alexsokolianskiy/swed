<?php

namespace App\Http\Controllers\Arduino;

use App\Http\Controllers\Controller;

class RunController extends Controller
{
    public function distance()
    {
        return view('arduino.experiments.run', [
            'experiment' => 'distance'
        ]);
    }

    public function servo()
    {
        return view('arduino.experiments.run', [
            'experiment' => 'servo'
        ]);
    }

    public function led()
    {
        return view('arduino.experiments.run', [
            'experiment' => 'led'
        ]);
    }

    public function display()
    {
        return view('arduino.experiments.run', [
            'experiment' => 'display'
        ]);
    }
}
