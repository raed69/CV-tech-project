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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('pays');
            $table->boolean('permi');
            $table->boolean('motorise');
            $table->integer('telephone');
            $table->string('adresse');
            $table->string('experience');
            $table->string('situation_fam');
            $table->string('type_contrat');
            $table->integer('salaire_souhaite');
            $table->string('poste_souhaite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};
