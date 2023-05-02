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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string("adresse");
            $table->char('sexe');
            $table->string("situationMatrimoniale");
            $table->integer("nombrEnfant")->nullable();
            $table->string('telephone')->unique();
            $table->string('telephone2')->nullabe()->unique();
             $table->string('pieceIdentite');
            $table->string('numeroPieceIdentite');
            $table->string("statut");//Permanent,Vacataire,Préstataire,...
            $table->string('email')->unique();
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignants');
    }
};
