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
        Schema::create('tuteurs', function (Blueprint $table) {
            $table->id();
            $table->string("NomDuPere");
            $table->string("nomDeLaMere");
            $table->string("numeroDeTelephoneDuPere");
            $table->string("numeroDeTelephoneDeLaMere");
            $table->string("niveauDuPere")->nullable();
            $table->string("niveauDeLaMere")->nullable();
            $table->string("adresseParent");
            $table->string("tuteur");
            $table->string("numeroDeTelephoneDuTuteur");
            $table->string("adresseTuteur");
            $table->string("serviceTuteur");
            $table->string("lienDeParente");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuteurs');
    }
};
