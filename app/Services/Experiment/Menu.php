<?php
namespace App\Services\Experiment;

use App\Models\Experiment\ExperimentQueue;

class Menu
{
    protected $experiments = [
        'distance',
        'servo',
        'led',
        'display'
    ];

    public function getExperiments()
    {
        $times = $this->getTimeQueue();
        $counts = $this->getCountQueue();
        $result = [];
        foreach ($this->experiments as $experiment) {
            $result[$experiment] = [
                'tts' => $times[$experiment]['start'],
                'tte' => $times[$experiment]['end'],
                'queue_qty' => $counts[$experiment]
            ];
        }

        return $result;
    }

    public function getArduinoExperiments()
    {
        $exps = ExperimentQueue::with(['experiments' => function ($query) {
            $query->whereIn('experiments.name', $this->experiments);
        }])->get();
    }

    public function getCountQueue()
    {
        $queue['distance'] = ExperimentQueue::where(['experiment_id' => 1, 'status' => 0])->count();
        $queue['servo'] = ExperimentQueue::where(['experiment_id' => 2, 'status' => 0])->count();
        $queue['led'] = ExperimentQueue::where(['experiment_id' => 3, 'status' => 0])->count();
        $queue['display'] = ExperimentQueue::where(['experiment_id' => 4, 'status' => 0])->count();

        return $queue;
    }

    public function getTimeQueue()
    {
        $result = ExperimentQueue::where(['experiment_id' => 1, 'status' => 1])->first();
        
        $queue['distance'] = $this->checkRecord($result);

        $result = ExperimentQueue::where(['experiment_id' => 2, 'status' => 1])->first();
        $queue['servo'] = $this->checkRecord($result);

        $result = ExperimentQueue::where(['experiment_id' => 3, 'status' => 1])->first();
        $queue['led'] = $this->checkRecord($result);

        $result = ExperimentQueue::where(['experiment_id' => 4, 'status' => 1])->first();
        $queue['display'] = $this->checkRecord($result);

        // var_dump($queue);

        return $queue;
    }

    public function checkRecord($model)
    {
        if ($model) {
            $result['start'] = $model->start->format('Y-m-d H:i:s');
            $result['end'] = $model->end->format('Y-m-d H:i:s');

            return $result;
        }

        $result['start'] = null;
        $result['end'] = null;
        
        return $result;
    }
}
