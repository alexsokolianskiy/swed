<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experiment\ExperimentQueue;
use App\Models\User;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(20)->create();
        ExperimentQueue::factory()->count(10)->create();
    }
}
