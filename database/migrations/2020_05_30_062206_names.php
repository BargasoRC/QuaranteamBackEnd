<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Names extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Names', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('FirstName')->nullable(false);
            $table->string('LastName')->nullable(false);
            $table->string('MiddleName')->nullable(false);
            $table->string('Suffix')->nullable();
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
        Schema::dropIfExists('Names');
    }
}
