<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            // Core Identity
            $table->string("name");
            $table->string("email")->nullable();
            $table->string("phone");
            $table->string('id_no')->nullable(); // Passport / License
            $table->string('license_attachment')->nullable();
            // Expedition Details
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->date('preferred_date')->nullable(); // Pickup Date
            $table->integer('days')->nullable(); // Rental Duration
            $table->text('requirements')->nullable(); // Strategic Requirements
            $table->string('exploring_region')->nullable()->after('id_no');

            // Financials & Extras
            $table->json('extras')->nullable(); // Selected Accessories
            $table->decimal('total_price', 15, 2)->nullable();
            $table->string('status')->default('pending');

            $table->timestamps();

            // Index for faster lookups
            $table->index('vehicle_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
