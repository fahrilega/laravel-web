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
        Schema::table('pelanggan', function (Blueprint $table) {
            $table->string('first_name', 255)->change();
            $table->string('last_name', 255)->change();
            $table->string('email', 255)->change();
            $table->string('phone', 30)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            $table->string('first_name', 100)->change();
            $table->string('last_name', 100)->change();
            $table->string('email', 255)->change(); // Default string() di Laravel adalah 255
            $table->string('phone', 20)->nullable()->change();
        });
    }
};
