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
        Schema::create('scolarites', function (Blueprint $table) {
            $table->id();
            $table->string("diplomEntree");
            $table->string("serie");
            $table->date("anneeOptionDiplome");
            $table->string("dernierNiveau");
            $table->string("dernierEtablissementFrequente");
            $table->string("canalInformer");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scolarites');
    }
};
