<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonFoodPreferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_food_preference', function (Blueprint $table) {
            $table->primary(['person_id', 'food_preference_id']);
            $table->bigInteger('person_id')->unsigned();
            $table->bigInteger('food_preference_id')->unsigned();

            $table->foreign('person_id')->references('id')->on('persons');
            $table->foreign('food_preference_id')->references('id')->on('food_preferences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_food_preference');
    }
}
