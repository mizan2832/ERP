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
        Schema::create('sub_child_menus', function (Blueprint $table) {
            $table->id();
            $table->string('child_menu_name');
            $table->unsignedBigInteger('top_menu_id');
            $table->unsignedBigInteger('sub_menu_id');
            $table->foreign('top_menu_id')->references('id')->on('top_menus')->onDelete('cascade');
            $table->foreign('sub_menu_id')->references('id')->on('sub_menus')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_child_menus');
    }
};
