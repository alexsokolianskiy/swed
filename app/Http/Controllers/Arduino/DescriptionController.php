<?php

namespace App\Http\Controllers\Arduino;

use App\Http\Controllers\Controller;
use App\Services\Experiment\Example;

class DescriptionController extends Controller
{
    protected $exampleService;

    public function __construct()
    {
        $this->exampleService = new Example();

    }

    public function distance()
    {
        return view('arduino.experiments.distance.page');
    }
    public function servo()
    {
        return view('arduino.experiments.servo.page');
    }
    public function led()
    {
        return view('arduino.experiments.led.page');
    }
    public function display()
    {
        return view('arduino.experiments.display.page', [
            'examples' => $this->exampleService->getExamples('display')
        ]);
    }
}
