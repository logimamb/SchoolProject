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
        Schema::create('parcours_etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId("parcours_id")->constrained()->onDelete("cascade");
            $table->foreignId("etudiant_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("parcours_etudiants",function(Blueprint $table){
            $table->dropForeign("parcours_id");
            $table->dropForeign("etudiant_id");
        });

        Schema::dropIfExists('parcours_etudiants');
    }
};
