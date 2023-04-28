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
        Schema::create('services', function (Blueprint $table) {
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->string("chefDeService");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table("services",function(Blueprint $table){
            $table->dropForeign("user_id");
        });
        
        Schema::dropIfExists('services');
    }
};
