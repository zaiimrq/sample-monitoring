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
        Schema::table('ktp', function (Blueprint $table) {
            $table->string('nik', 20)->after('user_id')->unique();
            $table->string('name', 100)->after('nik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ktp', function (Blueprint $table) {
            $table->dropColumn('nik');
            $table->dropColumn('name');
        });
    }
};
