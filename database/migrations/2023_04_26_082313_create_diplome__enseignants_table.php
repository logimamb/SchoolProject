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
        Schema::create('diplome__enseignants', function (Blueprint $table) {
            $table->foreignId("enseignant_id")->constrained()->onDelete("cascade");
            $table->foreignId("diplome_id")->constrained()->onDelete("cascade");
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("diplome__enseignants",function(Blueprint $table){
            $table->dropForeign("enseignant_id");
            $table->dropForeign("diplome_id");
        });

        Schema::dropIfExists('diplome__enseignants');
    }
};
