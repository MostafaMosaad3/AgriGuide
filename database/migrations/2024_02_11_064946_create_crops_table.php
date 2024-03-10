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
            $table->text('Recommended Time') ;
            $table->text('Planting Method') ;
            $table->text('water requirement') ;
            $table->text('Irrigation Method') ;
            $table->text('Fertilizers');
            $table->text('Planting Tips') ;
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
