<?php
namespace Database\Seeders\Experiment;

use Illuminate\Database\Seeder;
use App\Models\Experiment\Experiment;
use App\Models\Experiment\ExperimentEndAction;

class ArduinoExperimentEndActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiments = Experiment::arduino()->get();
        foreach ($experiments as $experiment) {
            $emptyCode = new ExperimentEndAction();
            $emptyCode->action = 'void setup(){}; void loop(){}';
            if (!$experiment->endAction) {
                $experiment->endAction()->save($emptyCode);
            }
        }
    }
}
