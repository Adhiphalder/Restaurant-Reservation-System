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
        Schema::create('booking', function (Blueprint $table) {
            $table->id('booking_id');
            // $table->integer('table_id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            // $table->integer('payment_id');
            // $table->string('customer_name');
            $table->date('date');
            $table->enum('time',["first","second","third","fourth","fifth","sixth","seventh","eightth","ninth","tenth","eleventh","twelvelth"])->nullable();
            $table->integer('guest_no');
            $table->enum('seat_no',["twoseater","fourseater","sixseater"])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
