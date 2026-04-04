<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalColumnsToBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
          //appointment details
            $table->date('preferred_date')->nullable();
            $table->time('preferred_time')->nullable();
            $table->string('appointment_type')->nullable();
            $table->string('preferred_doctor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('dob');
            $table->dropColumn('gender');
           //appoinment details
            $table->dropColumn('preferred_date');
            $table->dropColumn('preferred_time');
            $table->dropColumn('appointment_type');
            $table->dropColumn('preferred_doctor');
        });
    }
}
