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
        Schema::create('member_ship_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name') ;
            $table->text('Feature 1');
            $table->text('Feature 2');
            $table->text('Feature 3')->nullable();
            $table->text('Feature 4')->nullable();
            $table->string('Price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_ship_levels');
    }
};
