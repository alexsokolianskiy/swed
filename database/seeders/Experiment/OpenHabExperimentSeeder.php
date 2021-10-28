<?php
namespace Database\Seeders\Experiment;
use Illuminate\Database\Seeder;
use App\Models\Experiment\Experiment;

class OpenHabExperimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiments = [
            'solar' => [
                'time' => 180
            ],
            'rgb' => [
                'time' => 240
            ],
            'climate' => [
                'time' => 360
            ],
            'zone' => [
                'time' => 180
            ],
            'safety' => [
                'time' => 120
            ],
            'presence' => [
                'time' => 120
            ],
            'light' => [
                'time' => 120
            ],
            'access' => [
                'time' => 120
            ],
            'wifi' => [
                'time' => 300
            ],
            'ventilation' => [
                'time' => 180
            ],
        ];
        foreach ($experiments as $experiment => $payload) {
            Experiment::firstOrCreate([
                'name' => $experiment,
                'type' => Experiment::OPEN_HAB,
                'time' => $payload['time']
            ]);
        }
    }
}
