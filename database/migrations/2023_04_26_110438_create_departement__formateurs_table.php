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
        Schema::create('departement__formateurs', function (Blueprint $table) {
            $table->foreignId("enseignant_id")->constrained()->onDelete("cascade");
            $table->foreignId("departement_id")->constrained()->onDelete("cascade");
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("departement__formateurs",function(Blueprint $table){
            $table->dropForeign("enseignant_id");
            $table->dropForeign("departement_id");
        });

        Schema::dropIfExists('departement__formateurs');
    }
};
