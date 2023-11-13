<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('short_name');
            $table->string('email')->nullable();
            $table->integer('party_type');
            $table->text('address');
            $table->text('tag_company');
            $table->integer('credit_limit')->nullable();
            $table->string('supplier')->nullable();
            $table->integer('country');
            $table->integer('buffer_days')->nullable();
            $table->string('web')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('partial')->nullable();
            $table->string('bank')->nullable();
            $table->string('team')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyers');
    }
};
