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
        Schema::create('hotel_books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('hotel_id');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('transaction_id');
            $table->string('amount');
            $table->string('currency');
            $table->string('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_books');
    }
};
