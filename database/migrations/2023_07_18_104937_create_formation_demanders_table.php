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
        Schema::create('formation_demanders', function (Blueprint $table) {
            $table->id();            
            $table->string('libelle');            
            $table->string('start_date');            
            $table->string('duree');            
            $table->string('fin_date');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formation_demanders');
    }
};
