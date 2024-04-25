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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->unsignedBigInteger('table_id')->nullable();
            $table->foreign('table_id')->references('table_id')->on('tables')->onDelete('cascade');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('customer_id')->on('customers')->onDelete('cascade');
            $table->date('date');
            $table->enum('time',["first","second","third","fourth","fifth","sixth","seventh","eightth","ninth","tenth","eleventh","twelvelth"])->nullable();
            $table->enum('guest_no',["one","two", "three","four","five","six","seven","eight","nine","ten","eleven","twelve","thirdteen","fourteen","fiftheen","sixteen"])->nullable();
            $table->enum('seat_no',["twoseater","fourseater","sixseater","eightseater"])->nullable();
            $table->enum('add_seat_no',["twoseater","fourseater","sixseater","eightseater"])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
