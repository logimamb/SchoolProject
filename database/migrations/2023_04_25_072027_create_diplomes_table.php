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
        Schema::create('diplomes', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("referenceDiplome");
            $table->string("paysObtentionDiplome");
            $table->string("villeObtentionDiplome");
            $table->string("ecoleObtentionDiplome");
            $table->date("dateObtentionDiplome");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diplomes');
    }
};
