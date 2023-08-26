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
        Schema::create('item_account_creates', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->integer('category_id');
            $table->integer('group_id');
            $table->string('description');
            $table->string('item_code');
            $table->integer('order_uom');
            $table->integer('cons_uom');
            $table->integer('conversion_factor');
            $table->string('item_brand');
            $table->integer('origin');
            $table->string('model');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_account_creates');
    }
};
