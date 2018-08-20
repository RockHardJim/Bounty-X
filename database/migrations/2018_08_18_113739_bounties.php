<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bounties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bounties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_token');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('project_intake');
            $table->integer('bounty');
            $table->string('starts');
            $table->string('ends');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizen4_bounties');
    }
}
