<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperimentQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiment_queues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('experiment_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiment_queues');
    }
}
