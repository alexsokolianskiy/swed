<?php

namespace Database\Seeders;

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
       ExperimentQueue::factory()->count(10)->create();
    }
}
