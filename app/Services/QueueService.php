<?php

namespace App\Services;

use App\Jobs\ExperimentJob;
use App\Models\Experiment\Experiment;
use App\Models\Experiment\ExperimentQueue;

class QueueService
{
    const DISTANCE = 1;
    const SERVO = 2;
    const LED = 3;
    const DISPLAY = 4;
    
    public static function _expQueueInstance($id)
    {
        return ExperimentQueue::where([
            'experiment_id' => $id,
            'user_id' => auth()->user()->id
        ])->first();
    }

    public static function _addQueue(ExperimentQueue $eq, $username, $timeStart)
    {
        $experiment = Experiment::where('id', $eq->experiment_id)->first();
        $job = new ExperimentJob($eq, $username, $experiment->time);

        $job->onConnection('redis');

        if ($eq->experiment_id == self::DISTANCE) {
            $job->onQueue('distance');
        }

        if ($eq->experiment_id == self::SERVO) {
            $job->onQueue('servo');
        }

        if ($eq->experiment_id == self::LED) {
            $job->onQueue('led');
        }

        if ($eq->experiment_id == self::DISPLAY) {
            $job->onQueue('display');
        }

        $eq->start = $timeStart;
        
        $job->delay($timeStart);
        
        $eq->end = $eq->start->modify('+' . $experiment->time . ' seconds');

        $eq->save();

        dispatch($job);
    }

    public static function _timeStart(ExperimentQueue $eq)
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
