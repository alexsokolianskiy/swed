<?php

namespace App\Jobs;

use App\Models\Experiment\Experiment;
use App\Models\Experiment\ExperimentQueue;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ExperimentJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $eq;
    protected $username;
    protected $duration;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(ExperimentQueue $eq, $username, $duration)
    {
        $this->eq = $eq;
        $this->username = $username;
        $this->duration = $duration;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        ExperimentQueue::where([
            'experiment_id' => $this->eq->experiment_id,
            'status' => 1
        ])->delete();
        
        $this->eq->update([
            'status' => 1,
        ]);

        sleep(10);
        
        // $this->eq->delete();

        echo $this->username . PHP_EOL;

        return 0;
    }
}
