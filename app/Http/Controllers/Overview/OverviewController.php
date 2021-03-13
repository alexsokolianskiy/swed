<?php

namespace App\Http\Controllers\Overview;

use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    /**
     * Arduino board overview
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function arduino()
    {
        return view('overview.arduino');
    }
    /**
     * Arduino ide overview
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function ide()
    {
        return view('overview.ide');
    }
    /**
     * Raspberry PI board overview
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function rpi()
    {
        return view('overview.rpi');
    }
    /**
     * OpenHab overview
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function oh()
    {
        return view('overview.oh');
    }
}
