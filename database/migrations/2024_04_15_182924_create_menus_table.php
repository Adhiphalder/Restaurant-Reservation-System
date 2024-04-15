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
        Schema::create('menus', function (Blueprint $table) {
            $table->id('menu_id');
            $table->enum('menu_type',["stater","main_course","dessert"])->nullable();
            $table->enum('veg_or_non_veg',["veg","non-veg"])->nullable();
            $table->enum('type_of_non_veg',["chicken","motton"])->nullable();
            $table->string('menu_name');
            $table->string('menu_description');
            $table->string('photo');
            $table->timestamp('menu_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
