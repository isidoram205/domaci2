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
        Schema::create('proizvodjaci', function (Blueprint $table) {
            $table->id();
            $table->string('imeProizvodjaca')->unique();
            $table->string('opis', 50);
            $table->foreignId('industrija_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proizvodjaci');
    }
};
