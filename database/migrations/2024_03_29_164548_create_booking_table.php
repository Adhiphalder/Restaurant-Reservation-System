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
            // $table->unsignedBigInteger('table_id')->nullable();
            // $table->foreign('table_id')->references('table_id')->on('tables');

            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('customer_id')->on('customers');
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
