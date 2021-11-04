<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Experiment\ExperimentQueue;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //go over all arduino experiments ids
        foreach([1,2,3,4] as $id) {
            $currentTime = Carbon::now();
            //create 10 users in queue of current user
            for ($i = 0 ; $i < 10; $i++) {
                $start = $i * 5;
                $end = $start + 5;
                ExperimentQueue::factory()->make([
                    'experiment_id' => $id,
                    'start' => $currentTime->copy()->addMinutes($start)->timestamp,
                    'end' =>  $currentTime->copy()->addMinutes($end)->timestamp,
                    'user_id' => User::factory()->create()->id,
                    'status' => 0
                ])->save();
            }

        }
      
    }
}
