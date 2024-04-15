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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->unsignedBigInteger('customer_id')->nullable();
            // $table->foreign('customer_id')->references('customer_id')->on('bookings')->onUpdate('cascade');
            $table->foreign('customer_id')->references('customer_id')->on('customerms');
            $table->unsignedBigInteger('booking_id')->nullable();
            // $table->foreign('booking_id')->references('booking_id')->on('forms')->onUpdate('cascade');
            $table->foreign('booking_id')->references('booking_id')->on('booking');
            $table->integer('ammount')->default(200);
            $table->enum('paymethod',["upi","card"])->nullable();
            $table->timestamp('current_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
