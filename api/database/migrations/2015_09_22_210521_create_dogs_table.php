<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elderly', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('elderly_id')->unique();
            $table->string('name');
            $table->integer('percentage');
            $table->timestamps();
        });

        Schema::create('report', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('report_id');
            $table->integer('elderly_id');
            $table->integer('attempt_num');
            $table->integer('goal');
            $table->integer('percentage');
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
        Schema::drop('elderly');
        Schema::drop('report');
    }
}
