<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('slug')->unique();
            $table->string('email')->nullable();
            $table->string('phone')->nullable(); 
            $table->enum("designation", ['Founder', 'Doctor', 'Head Nurse', 'Head Pharmacist', 'Nurse', 'Consultant', 'Pharmacist', 'Clinical Assistant', 'Accountant', 'Receptionist'])->nullable();
            $table->enum("specialist", ['Chief Consultant Dermatologist', 'Hair Consultant', 'Cosmetic Surgeon'])->nullable();
            $table->string("qualification")->nullable();
            $table->string("skills")->nullable();
            $table->text("others")->nullable();
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
        Schema::dropIfExists('staff');
    }
}
