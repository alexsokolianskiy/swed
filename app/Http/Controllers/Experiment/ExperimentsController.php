<?php

namespace App\Http\Controllers\Experiment;

use App\Http\Controllers\Controller;
use App\Services\Experiment\Menu;
use App\Services\Experiment\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperimentsController extends Controller
{
    protected $queueService;
    protected $menuService;

    public function __construct()
    {
        $this->queueService = new Queue();
        $this->menuService = new Menu();
    }

    public function queueState()
    {
        $id = Auth::id();
        return response()->json($this->menuService->getExperiments($id));
    }
}
