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
        Schema::create('kreme', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->double('cena');
            $table->string('link')->unique();
            $table->text('tip');
            $table->foreignId('user_id');
            $table->foreignId('proizvodjac_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kreme');
    }
};