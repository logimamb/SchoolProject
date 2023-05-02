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
        Schema::create('enseigners', function (Blueprint $table) {
            $table->id();
            $table->foreignId("matiere_id")->constrained()->onDelete("cascade");
            $table->foreignId("enseignant_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("enseigners", function(Blueprint $table){
            $table->dropForeign("matiere_id");
            $table->dropForeign("enseignant_id");
        });

        Schema::dropIfExists('enseigners');
    }
};
