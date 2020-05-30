<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Accounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Accounts', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->integer('NameID')->nullable(false);
            $table->string('Position')->nullable();
            $table->string('Team')->nullable();
            $table->string('Email')->nullable(false);
            $table->string('Batch')->nullable();
            $table->string('Password')->nullable(false);
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
        Schema::dropIfExists('Accounts');
    }
}
