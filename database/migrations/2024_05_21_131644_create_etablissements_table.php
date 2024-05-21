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
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->unsignedBigInteger('regions_id');
            $table->string('nom_efp', 255)->unique();
            $table->string('adresse', 45)->nullable();
            $table->string('tel', 45)->nullable();
            $table->string('ville', 45)->nullable();
            $table->string('status', 45)->nullable();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('regions_id')->references('id')->on('regions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissements');
    }
};
