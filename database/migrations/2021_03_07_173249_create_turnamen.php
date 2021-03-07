<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnamen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnamen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('turnamenId');
            $table->string('turnamenName');
            $table->string('userId');
            $table->string('totalMember');
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
        Schema::dropIfExists('turnamen');
    }
}
