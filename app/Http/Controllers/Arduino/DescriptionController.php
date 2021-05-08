<?php

namespace App\Http\Controllers\Arduino;

use App\Http\Controllers\Controller;
use App\Jobs\ExperimentJob;
use App\Models\Experiment\Experiment;
use App\Models\Experiment\ExperimentQueue;
use App\Services\Experiment\Example;
<<<<<<< Updated upstream
=======
use App\Services\QueueService;
>>>>>>> Stashed changes
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    protected $exampleService;

    public function __construct()
    {
        $this->exampleService = new Example();
    }

    public function registerForExp(Request $request)
    {
        try {
            $model = new ExperimentQueue;
            $model->user_id = $request->user_id;
            $model->experiment_id = $request->exp_id;

            $model->save();

<<<<<<< Updated upstream
            $this->_addQueue($model, auth()->user()->name);
=======
            $timeStart = QueueService::_timeStart($model);
            QueueService::_addQueue($model, auth()->user()->name, $timeStart);
>>>>>>> Stashed changes

            return response()->json(['model' => $model]);
        } catch (Exception $ex) {
            return response()->json(['errMsg' => $ex->getMessage()])->setStatusCode(404);
        }
    }

    public function distance()
    {
        if (Auth::check()) {
            return view('arduino.experiments.distance.page', [
<<<<<<< Updated upstream
                'queue' => $this->_expQueueInstance(1)
=======
                'queue' => QueueService::_expQueueInstance(1)
>>>>>>> Stashed changes
            ]);
        }

        return view('arduino.experiments.distance.page');
    }

    public function servo()
    {
        if (Auth::check()) {
            return view('arduino.experiments.servo.page', [
<<<<<<< Updated upstream
                'queue' => $this->_expQueueInstance(2)
=======
                'queue' => QueueService::_expQueueInstance(2)
>>>>>>> Stashed changes
            ]);
        }

        return view('arduino.experiments.servo.page');
    }

    public function led()
    {
        if (Auth::check()) {
            return view('arduino.experiments.led.page', [
<<<<<<< Updated upstream
                'queue' => $this->_expQueueInstance(3)
=======
                'queue' => QueueService::_expQueueInstance(3)
>>>>>>> Stashed changes
            ]);
        }

        return view('arduino.experiments.led.page');
    }

    public function display()
    {
        $examples = $this->exampleService->getExamples('display');

        if (Auth::check()) {
            return view('arduino.experiments.display.page', [
<<<<<<< Updated upstream
                'queue' => $this->_expQueueInstance(4),
=======
                'queue' => QueueService::_expQueueInstance(4),
>>>>>>> Stashed changes
                'examples' => $examples
            ]);
        }

        return view('arduino.experiments.display.page', [
            'examples' => $examples
        ]);
    }

    protected function _expQueueInstance($id)
    {
        return ExperimentQueue::where([
            'experiment_id' => $id,
            'user_id' => auth()->user()->id
        ])->first();
    }

    protected function _addQueue(ExperimentQueue $eq, $username)
    {
        $timeStart = $this->_timeStart($eq);
        $experiment = Experiment::where('id', $eq->experiment_id)->first();
        $job = new ExperimentJob($eq, $username, $experiment->time);

        $job->onConnection('redis');

        if ($eq->experiment_id == 1) {
            $job->onQueue('distance');
        }

        if ($eq->experiment_id == 2) {
            $job->onQueue('servo');
        }

        if ($eq->experiment_id == 3) {
            $job->onQueue('led');
        }

        if ($eq->experiment_id == 4) {
            $job->onQueue('display');
        }

        $eq->start = $timeStart;
        
        $job->delay($timeStart);
        
        $eq->end = $eq->start->modify('+' . $experiment->time . ' seconds');

        $eq->save();

        dispatch($job);
    }

    protected function _timeStart(ExperimentQueue $eq)
    {
        $firstModel = ExperimentQueue::where(
            'experiment_id',
            $eq->experiment_id
        )->first();

        if ($firstModel->end < now()) {
            return now();
        }
        
        return $firstModel->start ? $firstModel->end : now();
    }
}
