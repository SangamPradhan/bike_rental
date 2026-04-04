<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternationalBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('international_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('country_code');
            $table->string('phone'); 
            $table->string('email');
            $table->string('country'); 
            $table->string('appointment_type'); 
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
        Schema::dropIfExists('international_bookings');
    }
}
