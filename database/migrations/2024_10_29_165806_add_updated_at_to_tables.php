<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('club_info', function (Blueprint $table) {
            $table->timestamp('updated_at')->nullable();
        });
        Schema::table('matches', function (Blueprint $table) {
            $table->timestamp('updated_at')->nullable();
        });
        Schema::table('roster', function (Blueprint $table) {
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('club_info', function (Blueprint $table) {
            $table->dropColumn('updated_at');
        });
        Schema::table('matches', function (Blueprint $table) {
            $table->dropColumn('updated_at');
        });
        Schema::table('roster', function (Blueprint $table) {
            $table->dropColumn('updated_at');
        });
    }
};
