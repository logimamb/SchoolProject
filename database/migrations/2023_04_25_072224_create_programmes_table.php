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
        Schema::create('programmes', function (Blueprint $table) {
            $table->foreignId("filiere_id")->constrained()->onDelete("cascade");
            $table->foreignId("semestre_id")->constrained()->onDelete("cascade");
            $table->foreignId("matiere_id")->constrained()->onDelete("cascade");
            $table->foreignId("enseignant_id")->constrained()->onDelete("cascade");
            $table->string("volumeHoraire");
            $table->string("coefficient");
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("programmes",function(Blueprint $table){
            $table->dropForeign("filiere_id");
            $table->dropForeign("semestre_id");
            $table->dropForeign("matiere_id");
            $table->dropForeign("enseignant_id");
        });

        Schema::dropIfExists('programmes');
    }
};
