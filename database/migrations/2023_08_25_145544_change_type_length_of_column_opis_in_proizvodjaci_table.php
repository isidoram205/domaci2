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
        Schema::table('proizvodjaci', function (Blueprint $table) {
            //
            $table->string('opis', 100)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proizvodjaci', function (Blueprint $table) {
            //
            $table->string('opis', 50)->change();
        });
    }
};
