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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->foreignId("filiere_id")->constrained()->onDelete("cascade");
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("options",function(Blueprint $table){
            $table->dropForeign("filiere_id");
        });
        
        Schema::dropIfExists('options');
    }
};
