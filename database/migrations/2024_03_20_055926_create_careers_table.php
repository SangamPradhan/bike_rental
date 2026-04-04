<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('position')->nullable();
            $table->text('description')->nullable();
            $table->enum('contract', ['Fixed term contract', 'Temporary contract'])->nullable();
            $table->enum('timing', ['Full time', 'Part time'])->nullable();
            $table->enum('status', ['Vacancy open', 'Vacancy closed', 'Still Hiring'])->nullable();
            $table->string('vacancy')->nullable();
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
        Schema::dropIfExists('careers');
    }
}
