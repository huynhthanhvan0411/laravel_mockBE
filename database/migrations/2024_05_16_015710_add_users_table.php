<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('division_id')->after('role_id');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->unsignedBigInteger('position_id')->after('division_id');
            $table->foreign('position_id')->references('id')->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['division_id', 'position_id']);
            $table->dropForeign(['division_id']);
            $table->dropForeign(['position_id']);
        });
    }
};
