<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateStaffTableForTeamRedesign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Change enum columns to string using DB statement to avoid doctrine/dbal requirement in Laravel 8 for enums
        DB::statement("ALTER TABLE staffs MODIFY COLUMN designation VARCHAR(255) NULL");
        DB::statement("ALTER TABLE staffs MODIFY COLUMN specialist VARCHAR(255) NULL");

        Schema::table('staffs', function (Blueprint $table) {
            $table->boolean('is_founder')->default(false)->after('slug');
            $table->string('languages')->nullable()->after('is_founder');
            $table->unsignedBigInteger('fav_bike_id')->nullable()->after('languages');
            $table->text('quote')->nullable()->after('fav_bike_id');
            $table->string('social_facebook')->nullable()->after('quote');
            $table->string('social_instagram')->nullable()->after('social_facebook');
            $table->string('social_twitter')->nullable()->after('social_instagram');
            $table->string('social_linkedin')->nullable()->after('social_twitter');

            $table->foreign('fav_bike_id')->references('id')->on('vehicles')->onDelete('set null');
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
            $table->dropForeign(['fav_bike_id']);
            $table->dropColumn([
                'is_founder',
                'languages',
                'fav_bike_id',
                'quote',
                'social_facebook',
                'social_instagram',
                'social_twitter',
                'social_linkedin'
            ]);
        });

        // Reverting to enum is tricky without doctrine/dbal, but we can use statement
        // Note: This won't work perfectly if new values exist that aren't in the enum, 
        // but that's expected behavior for a 'down' migration.
        DB::statement("ALTER TABLE staffs MODIFY COLUMN designation ENUM('Founder', 'Doctor', 'Head Nurse', 'Head Pharmacist', 'Nurse', 'Consultant', 'Pharmacist', 'Clinical Assistant', 'Accountant', 'Receptionist') NULL");
        DB::statement("ALTER TABLE staffs MODIFY COLUMN specialist ENUM('Chief Consultant Dermatologist', 'Hair Consultant', 'Cosmetic Surgeon') NULL");
    }
}
