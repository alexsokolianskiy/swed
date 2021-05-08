<?php
namespace App\Services\Experiment;

use App\Models\Experiment\ExperimentQueue;

class Menu
{
<<<<<<< Updated upstream
=======
    const DISTANCE = 1;
    const SERVO = 2;
    const LED = 3;
    const DISPLAY = 4;

    const ACTIVE = 1;
    const DISABLE = 0;
    
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        $queue['distance'] = ExperimentQueue::where(['experiment_id' => 1, 'status' => 0])->count();
        $queue['servo'] = ExperimentQueue::where(['experiment_id' => 2, 'status' => 0])->count();
        $queue['led'] = ExperimentQueue::where(['experiment_id' => 3, 'status' => 0])->count();
        $queue['display'] = ExperimentQueue::where(['experiment_id' => 4, 'status' => 0])->count();
=======
        $queue['distance'] = ExperimentQueue::where(['experiment_id' => self::DISTANCE, 'status' => self::DISABLE])->count();
        $queue['servo'] = ExperimentQueue::where(['experiment_id' => self::SERVO, 'status' => self::DISABLE])->count();
        $queue['led'] = ExperimentQueue::where(['experiment_id' => self::LED, 'status' => self::DISABLE])->count();
        $queue['display'] = ExperimentQueue::where(['experiment_id' => self::DISPLAY, 'status' => self::DISABLE])->count();
>>>>>>> Stashed changes

        return $queue;
    }

    public function getTimeQueue()
    {
<<<<<<< Updated upstream
        $result = ExperimentQueue::where(['experiment_id' => 1, 'status' => 1])->first();
        
        $queue['distance'] = $this->checkRecord($result);

        $result = ExperimentQueue::where(['experiment_id' => 2, 'status' => 1])->first();
        $queue['servo'] = $this->checkRecord($result);

        $result = ExperimentQueue::where(['experiment_id' => 3, 'status' => 1])->first();
        $queue['led'] = $this->checkRecord($result);

        $result = ExperimentQueue::where(['experiment_id' => 4, 'status' => 1])->first();
=======
        $result = ExperimentQueue::where(['experiment_id' => self::DISTANCE, 'status' => self::ACTIVE])->first();
        
        $queue['distance'] = $this->checkRecord($result);

        $result = ExperimentQueue::where(['experiment_id' => self::SERVO, 'status' => self::ACTIVE])->first();
        $queue['servo'] = $this->checkRecord($result);

        $result = ExperimentQueue::where(['experiment_id' => self::LED, 'status' => self::ACTIVE])->first();
        $queue['led'] = $this->checkRecord($result);

        $result = ExperimentQueue::where(['experiment_id' => self::DISPLAY, 'status' => self::ACTIVE])->first();
>>>>>>> Stashed changes
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
