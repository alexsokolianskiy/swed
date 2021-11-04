<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveStartEndToTimestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experiment_queues', function (Blueprint $table) {
            $table->integer('start')->change();
        });
        Schema::table('experiment_queues', function (Blueprint $table) {
            $table->integer('end')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experiment_queues', function (Blueprint $table) {
            $table->datetime('start')->change();
        });
        Schema::table('experiment_queues', function (Blueprint $table) {
            $table->datetime('end')->change();
        });
    }
}
