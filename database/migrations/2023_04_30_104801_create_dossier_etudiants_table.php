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
        Schema::create('dossier_etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId("inscription_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("dossier_etudiants", function(Blueprint $table){
            $table->dropForeign("inscription_id");
        });

        Schema::dropIfExists('dossier_etudiants');
    }
};
