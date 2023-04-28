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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->foreignId("filiere_id")->constrained()->onDelete("cascade");
            $table->foreignId("etudiant_id")->constrained()->onDelete("cascade");
            $table->foreignId("niveau_id")->constrained()->onDelete("cascade");
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("inscription",function(Blueprint $table){
            $table->dropForeign("filiere_id");
            $table->dropForeign("etudiant_id");
            $table->dropForeign("niveau_id");
            $table->dropForeign("user_id");
        });

        Schema::dropIfExists('inscriptions');
    }
};
