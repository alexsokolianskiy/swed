<?php
namespace App\Services\Experiment;

class Menu {
    protected $experiments = [
        'distance',
        'servo',
        'led',
        'display'
    ];

    public function getExperiments() {
        $result = [];
        foreach ($this->experiments as $experiment) {
            $result[$experiment] = [
                'tts' => null,
                'tte' => null,
                'queue_qty' => null
            ];
        }

        return $result;
    }

    public function getArduinoExperiments() {
        $exps = ExperimentQueue::with(['experiments' => function($query) {
            $query->whereIn('experiments.name', $this->experiments);
        }])->get();
    }
}