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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->foreignId("parcour_id")->constrained()->onDelete("cascade");//Scolarité = Parcours
            $table->string("nom");
            $table->string("prenom");
            $table->date("dateDeNaissance");
            $table->string("lieuDeNaissance");
            $table->char("sexe");
            $table->string("nationalite");
            $table->string("telephone")->unique();
            $table->string("telephone2")->unique()->nullable();
            $table->string("adresse");
            $table->string("nomDuPere");
            $table->string("NomDeLaMere");
            $table->string("telephoneDuPere");
            $table->string("telephoneDeLaMere");
            $table->string("nomDuTuteur");
            $table->string("fonctionDuTuteur");
            $table->string("lienAvecTuteur");
            $table->string("situationMatrimoniale");
            $table->string("photo");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        schema::table("etudiants",function(Blueprint $table){
            $table->dropForeign("user_id");
            $table->dropForeign("parcour_id");

        });

        Schema::dropIfExists('etudiants');
    }
};
