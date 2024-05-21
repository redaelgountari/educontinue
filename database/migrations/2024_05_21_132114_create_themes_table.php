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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('domaines_id');
            $table->string('intitule_theme', 255);
            $table->integer('duree_formation')->nullable();
            $table->integer('status')->default(1);
            $table->foreign('domaines_id')->references('id')->on('domaines');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
