<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('turnamen_id');
            $table->foreign('turnamen_id')->references('id')->on('turnamen')->onUpdate('cascade');
            $table->string('name');
            $table->integer('gold_medal')->nullable();
            $table->integer('silver_medal')->nullable();
            $table->integer('bronze_medal')->nullable();
            $table->integer('total_medal')->nullable();
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
        Schema::dropIfExists('member');
    }
}
