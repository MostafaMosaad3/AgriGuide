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
        Schema::create('soils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name') ;
            $table->string('image') ;
            $table->text('Recommended_Water') ;
            $table->text('Recommended_Fertilizers') ;
            $table->text('additional_notes') ;
            $table->string('suitable_crops') ;
            $table->text('properties') ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soils');
    }
};
