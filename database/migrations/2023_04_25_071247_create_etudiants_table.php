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
            $table->foreignId("tuteur_id")->constrained()->onDelete("cascade");
            $table->foreignId("scolarite_id")->constrained()->onDelete("cascade");
            $table->string("nom");
            $table->string("prenom");
            $table->date("dateDeNaissance");
            $table->string("lieuDeNaissance");
            $table->char("sexe");
            $table->string("nationalite");
            $table->string("telephone")->unique();
            $table->string("telephone2")->unique()->nullable();
            $table->string("adresse");
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
            $table->dropForeign("tuteur_id");
            $table->dropForeign("scolarite_id");

        });

        Schema::dropIfExists('etudiants');
    }
};
