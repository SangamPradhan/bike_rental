<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraPricesAndTimesToServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->decimal('price_two', 10, 2)->nullable()->after('price');
            $table->decimal('price_three', 10, 2)->nullable()->after('price_two');

            $table->integer('time_one')->default(15)->after('price_three');
            $table->integer('time_two')->nullable()->after('time_one');
            $table->integer('time_three')->nullable()->after('time_two');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['price_two', 'price_three', 'time_one', 'time_two', 'time_three']);
        });
    }
}
