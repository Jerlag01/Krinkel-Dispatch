<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_skill', function (Blueprint $table) {
            $table->primary(['person_id', 'skill_id']);
            $table->bigInteger('person_id')->unsigned();
            $table->bigInteger('skill_id')->unsigned();

            $table->foreign('person_id')->references('id')->on('persons');
            $table->foreign('skill_id')->references('id')->on('skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_skill');
    }
}
