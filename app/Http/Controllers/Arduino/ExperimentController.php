<?php

namespace App\Http\Controllers\Arduino;

use App\Http\Controllers\Controller;
use App\Services\Experiment\Example;

class ExperimentController extends Controller
{
    protected $exampleService;

    public function __construct()
    {
        $this->exampleService = new Example();

    }

    public function distance()
    {
        return view('arduino.experiments.distance', [
            'model' => $this->exampleService
        ]);
    }
    public function servo()
    {
        return view('arduino.experiments.servo');
    }
    public function led()
    {
        return view('arduino.experiments.led');
    }
    public function display()
    {
        return view('arduino.experiments.display', [
            'examples' => $this->exampleService->getExamples('display')
        ]);
    }
}
