<?php
namespace App\Services\Experiment;

use Carbon\Carbon;
use App\Models\Experiment\Experiment;
use App\Models\Experiment\ExperimentQueue;

class Queue {
    public function removeExpired() {

        $experiments = ExperimentQueue::where(
            'end', '<=', Carbon::now()->timestamp
        )->get();
        $expForFree = [];
        foreach($experiments as $exp) {
            if (!in_array($exp->experiment->id, $expForFree)) {
                $expForFree[] = $exp->experiment->id;
            }
            $exp->delete();
        }

        foreach($expForFree as $exp) {
            $this->free($exp);
        }
    }


    public function activateNext() {
        ExperimentQueue::where(
            'start', '<', Carbon::now()->timestamp
        )->where(
            'status', '=', 0
        )->update([
            'status' => 1
        ]);
    }

    public function append() {

    }

    public function free($expId) {
        $experiment = Experiment::find($expId);
        if ($experiment && $experiment->endAction) {
            if ($experiment->type == Experiment::ARDUINO) {
                echo "\ntry to upload code\n";
                // $this->uploadCode($experiment->id, $experiment->endAction->action);
            } else {
                echo "\ntry to api code\n";
            }
        }
    }

    public function uploadCode($expId, $action) {
        "\ntry to upload code\n";
    }

    public function callApi($action) {
        $json = json_decode($action, true);
        foreach($json['urls'] as $url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url['url']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            if (strtolower($url['method']) == "post") {
                curl_setopt($ch, CURLOPT_POST, 1);
            } else {
                curl_setopt($ch, CURLOPT_POST, 0);
            }
            if ($data != $url['options']) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $url['options']); 
            }
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));
            curl_exec($ch);
        }
        return true;
    }
}
