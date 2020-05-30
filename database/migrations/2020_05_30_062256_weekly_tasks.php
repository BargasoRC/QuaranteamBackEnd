<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WeeklyTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('WeeklyTasks', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->integer('TasksID')->nullable(false);
            $table->integer('NameID')->nullable(false);
            $table->integer('Coordinator')->nullable(false);
            $table->integer('MakerID')->nullable(false);
            $table->date('Date')->nullable(false);
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
        Schema::dropIfExists('WeeklyTasks');
    }
}
