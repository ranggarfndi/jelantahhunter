<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('quantity');
            $table->enum('status', ['pending', 'waiting_for_checking', 'waiting_for_calculating_price', 'rejected', 'canceled', 'done']);
            $table->string('phone_number');
            $table->string('address');
            $table->string('address_note');
            $table->string('longtitude');
            $table->string('latitude');
            $table->integer('price')->nullable();
            $table->boolean('is_claim_reward')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
