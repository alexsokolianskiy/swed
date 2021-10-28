<?php

namespace App\Http\Controllers\Arduino;

use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function distance()
    {
        return view('arduino.experiments.distance.example');
    }

    public function servo()
    {
        return view('arduino.experiments.servo.example');
    }

    public function led()
    {
        return view('arduino.experiments.led.example');
    }

    public function display()
    {
        return view('arduino.experiments.display.example');
    }
}
