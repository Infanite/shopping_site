<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelControllersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_controllers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shirts');
            $table->string('paints');
            $table->string('shoes');
            $table->string('watches');
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
        Schema::drop('model_controllers');
    }
}
