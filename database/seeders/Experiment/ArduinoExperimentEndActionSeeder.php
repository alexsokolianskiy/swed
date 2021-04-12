<?php
namespace Database\Seeders\Experiment;

use App\Models\Experiment\Experiment;
use Illuminate\Database\Seeder;

class ArduinoExperimentEndActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiments = Experiment::arduino()->all();
        foreach ($experiments as $experiment) {
    
            $experiment->endAction()->attach([
                
            ]);
        }
    }
}
