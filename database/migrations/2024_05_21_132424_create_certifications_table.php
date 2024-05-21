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
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actions_id');
            $table->string('code', 45);
            $table->string('nom_prenom', 45);
            $table->string('cin', 45);
            $table->string('adresse', 45)->nullable();
            $table->string('intitule_formation', 45)->nullable();
            $table->integer('status')->nullable();
            $table->foreign('actions_id')->references('id')->on('actions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};
