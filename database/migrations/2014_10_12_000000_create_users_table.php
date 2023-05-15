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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("service_id")->constrained()->onDelete("cascade");
            $table->foreignId("fonction_id")->constrained()->onDelete("cascade");
            $table->string('nom');
            $table->string('prenom');
            $table->char('sexe');
            $table->string('telephone')->unique();
            $table->string('telephone2')->nullabe()->unique();
            $table->string("adresse");
            $table->string("situationMatrimoniale");
            $table->integer("nombrEnfant")->nullable();
            $table->string('pieceIdentite');
            $table->string('numeroPieceIdentite');
            $table->string("niveauEtude");
            $table->string('email')->unique();
            $table->string('photo');
            $table->string('password');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("users",function(Blueprint $table){
            $table->dropForeign("service_id");
            $table->dropForeign("fonction_id");
        });

        
        Schema::dropIfExists('users');
    }
};
