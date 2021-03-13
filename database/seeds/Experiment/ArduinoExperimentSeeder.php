<?php

use App\Models\Experiment\Experiment;
use Illuminate\Database\Seeder;

class ArduinoExperimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiments = [
            'distance' => [
                'time' => 300
            ],
            'servo' => [
                'time' => 300
            ],
            'led' => [
                'time' => 300
            ],
            'display' => [
                'time' => 300
            ],
        ];
        foreach ($experiments as $experiment => $payload) {
            Experiment::firstOrCreate([
                'name' => $experiment,
                'type' => Experiment::ARDUINO,
                'time' => $payload['time']
            ]);
        }

    }
}
