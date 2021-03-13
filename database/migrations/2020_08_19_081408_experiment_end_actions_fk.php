<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExperimentEndActionsFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experiment_end_actions', function (Blueprint $table) {
            $table->foreign('experiment_id', 'experiment_end_actions_experiment_id')->references('id')->on('experiments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experiment_end_actions', function (Blueprint $table) {
            $table->dropForeign('experiment_end_actions_experiment_id');
        });
    }
}
