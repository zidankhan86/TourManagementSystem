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
        Schema::create('boks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->string('name');
            $table->string('phone');
            $table->date('from_date');
            $table->date('to_date');
            $table->string('road');
            $table->string('city');
            $table->string('location');
            $table->string('status');
            $table->string('hour');
            $table->string('total');
            $table->string('transaction_id')->default('03032332323');
            $table->string('currency')->default('BDT');
             $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boks');
    }
};
