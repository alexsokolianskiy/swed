<?php
namespace App\Services\Experiment;

use App\Services\Experiment\Queue;

class Menu {
    private $queueService;
    protected $arduinoExperiments;
    protected $iotExperiments;

    public function __construct() {
        $this->queueService = new Queue();
        $this->arduinoExperiments = $this->queueService->getArduinoExperiments();
        $this->iotExperiments = $this->queueService->getIotExperiments();
    }

    public function getExperiments($userId) {
        $result = [];
        foreach ($this->arduinoExperiments as $experiment) {
            $result[$experiment->name] = [
                'tts' => $this->queueService->timeToStart($experiment->id, $userId),
                'tte' => $this->queueService->timeToEnd($experiment->id, $userId),
                'queue_qty' => $this->queueService->totalLength($experiment->id)
            ];
        }

        return $result;
    }


}