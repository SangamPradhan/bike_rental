<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToStaffsAndNewsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staffs', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name')->nullable();
        });

        Schema::table('news', function (Blueprint $table) {
            $table->string('slug')->unique()->after('title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staffs', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
