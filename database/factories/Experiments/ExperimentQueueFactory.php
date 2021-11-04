<?php

namespace Database\Factories\Experiments;

use App\Models\User;
use App\Models\Model;
use App\Models\Experiment\Experiment;
use App\Models\Experiment\ExperimentQueue;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperimentQueueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Experiment\ExperimentQueue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arduinoExperiment = Experiment::whereIn('name', ['distance', 'servo', 'led', 'display'])->inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        $start = rand(time()-1000, time() + 1000);
        $end = $start + $arduinoExperiment->time;
        return [
            'experiment_id' => $arduinoExperiment->id,
            'start' => $start,
            'end' => $end,
            'user_id' => $user->id,
            'status' => $this->faker->numberBetween(0, 1)
        ];
    }
}
