<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWomansDayBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('womans_day_bookings', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("phone")->nullable();
            $table->string("address")->nullable();
            $table->string("arrival_time")->nullable();
            $table->boolean("gynecologist")->nullable()->default(0);
            $table->boolean("dermatologist")->nullable()->default(0);
            $table->boolean("hydra_facial")->nullable()->default(0);
            $table->boolean("hair_treatment")->nullable()->default(0);
            $table->boolean("micro_needling")->nullable()->default(0);
            $table->boolean("carbon_peeling")->nullable()->default(0);
            $table->boolean("facial")->nullable()->default(0);
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
        Schema::dropIfExists('womans_day_bookings');
    }
}
