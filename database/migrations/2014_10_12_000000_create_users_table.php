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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('designation_id');
            $table->integer('department_id');
            $table->unsignedBigInteger('role_level');
            $table->integer('unit_id');
            $table->integer('buyer_id');
            $table->integer('data_access_level');
            $table->boolean('status');
            $table->timestamp('email_verified_at')->nullable();
            $table->foreign('role_level')->references('id')->on('roles')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
