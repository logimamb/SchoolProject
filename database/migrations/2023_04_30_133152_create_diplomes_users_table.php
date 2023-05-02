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
        Schema::create('diplomes_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("diplome_id")->constrained()->onDelete("cascade");
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("diplomes_users", function(Blueprint $table){
            $table->dropForeign("diplome_id");
            $table->dropForeign("user_id");
        });
        
        Schema::dropIfExists('diplomes_users');
    }
};
