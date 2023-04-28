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
        Schema::create('frais__etudiants', function (Blueprint $table) {
            $table->foreignId("frais_id")->constrained()->onDelete("cascade");
            $table->foreignId("etudiant_id")->constrained()->onDelete("cascade");
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("frais_etudiants",function(Blueprint $table){
            $table->dropForeign("frais_id");
            $table->dropForeign("etudiant_id");
        });

        Schema::dropIfExists('frais__etudiants');
    }
};
