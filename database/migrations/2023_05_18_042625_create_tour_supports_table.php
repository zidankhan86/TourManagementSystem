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
        Schema::create('tour_supports', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('v_name');
            $table->text('description');
            $table->double('price');
            $table->string('location_for');
            $table->string('status');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_supports');
    }
};
