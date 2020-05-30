<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Complains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Complains', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->integer('ComplainBy')->nullable(false);
            $table->integer('ConcernTo')->nullable(false);
            $table->string('Complain')->nullable(false);
            $table->date('date')->nullable(false);
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
        Schema::dropIfExists('Complains');
    }
}
