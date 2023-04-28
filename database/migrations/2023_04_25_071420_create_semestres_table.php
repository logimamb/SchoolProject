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
        Schema::create('semestres', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->foreignId("niveau_id")->constrained()->onDelete("cascade");
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("semestres",function(Blueprint $table){
            $table->dropForeign("niveau_id");
        });
        
        Schema::dropIfExists('semestres');
    }
};
