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
        Schema::create('crops', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('soil_id')->constrained() ;
            $table->string('name') ;
            $table->string('image') ;
            $table->string('Recommended Time') ;
            $table->string('Planting Method') ;
            $table->string('water requirement') ;
            $table->string('Irrigation Method') ;
            $table->string('Fertilizers');
            $table->string('Common Diseases') ;
            $table->string('Planting Tips') ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crops');
    }
};
