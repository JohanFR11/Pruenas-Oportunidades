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
            $table->dropColumn('avatar'); // Elimina la columna 'avatar'
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('external_id'); // Elimina la columna 'external_id'
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('external_auth'); // Elimina la columna 'external_auth'
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['google_access_token', 'google_refresh_token']); // Elimina ambas columnas
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable(); // Vuelve a agregar la columna 'avatar'
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('external_id')->nullable(); // Vuelve a agregar la columna 'external_id' si es necesario
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('external_auth')->nullable(); // Vuelve a agregar la columna 'external_auth' si es necesario
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_access_token')->nullable(); // Vuelve a agregar si es necesario
            $table->string('google_refresh_token')->nullable(); // Vuelve a agregar si es necesario
        });
    }
};
