<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsQueueToUser extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experiment_queues', function (Blueprint $table) {
            $table->foreign('user_id', 'experiment_queues_user_id')->references('id')->on('users');
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
            $table->dropForeign('experiment_queues_user_id');
        });
    }
}
