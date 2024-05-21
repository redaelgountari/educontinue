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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etablissements_id');
            $table->unsignedBigInteger('themes_id');
            $table->string('nom', 255);
            $table->string('date_debut', 45)->nullable();
            $table->string('date_fin', 45)->nullable();
            $table->integer('status')->nullable();
            $table->foreign('etablissements_id')->references('id')->on('etablissements');
            $table->foreign('themes_id')->references('id')->on('themes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
