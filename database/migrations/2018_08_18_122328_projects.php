<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bounty_id');
            $table->string('category');
            $table->string('subject');
            $table->string('description');
            $table->integer('bounty_limit');
            $table->integer('youth_limit');
            $table->integer('upvotes');
            $table->timestamp('suggested');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizen4_projects');
    }
}
