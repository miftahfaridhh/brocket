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
        Schema::create('turnamen_member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('turnamenId');
            $table->string('userId');
            $table->string('clubName');
            $table->integer('goldMedal');
            $table->integer('silverMedal');
            $table->integer('bronzeMedal');
            $table->integer('totalMedal');
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
        Schema::dropIfExists('turnamen_member');
    }
}
