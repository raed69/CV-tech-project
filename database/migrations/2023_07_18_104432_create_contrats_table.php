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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_candidat');
            $table->foreign('id_candidat')->references('id')->on('candidats');
            $table->string('type_contrat');
            $table->string('poste');
            $table->integer('salaire');
            $table->integer('prime');
            $table->integer('nombre_heurs_travail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
