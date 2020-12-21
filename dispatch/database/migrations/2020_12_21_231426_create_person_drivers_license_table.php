<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonDriversLicenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_drivers_license', function (Blueprint $table) {
            $table->primary(['person_id', 'drivers_license_id']);
            $table->bigInteger('person_id')->unsigned();
            $table->bigInteger('drivers_license_id')->unsigned();

            $table->foreign('person_id')->references('id')->on('persons');
            $table->foreign('drivers_license_id')->references('id')->on('drivers_licenses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_drivers_license');
    }
}
