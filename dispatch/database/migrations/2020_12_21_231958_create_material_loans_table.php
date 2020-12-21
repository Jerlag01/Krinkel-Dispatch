<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('material_id')->unsigned();
            $table->string('loaner_name');
            $table->string('loander_surname');
            $table->string('verbond');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('location');
            $table->string('phone_number');
            $table->enum('loanable_to', ['dispatch', 'everyone']);

            $table->foreign('material_id')->references('id')->on('materials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_loans');
    }
}
