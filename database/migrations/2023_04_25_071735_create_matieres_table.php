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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("codeMatiere");
            $table->foreignId("departement_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("matieres", function(Blueprint $table){
            $table->dropForeign("departement_id");
        });
        
        Schema::dropIfExists('matieres');
    }
};
