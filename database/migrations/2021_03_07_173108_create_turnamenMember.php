<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnamenMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnamenMember', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('turnamenId');
            $table->string('userId');
            $table->string('clubName');
            $table->integer('goldMedal')->nullable();;
            $table->integer('silverMedal')->nullable();;
            $table->integer('bronzeMedal')->nullable();;
            $table->integer('totalMedal')->nullable();;
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
        Schema::dropIfExists('turnamenMember');
    }
}
