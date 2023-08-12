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
            $table->string('email');
            $table->string('party_type');
            $table->text('address');
<<<<<<< HEAD
            $table->text('address2');
=======
            $table->text('tag_company');
>>>>>>> 589bf619e7b48feee14cf669942608477864a721
            $table->string('credit_limit');
            $table->string('supplier');
            $table->string('country');
            $table->string('buffer_days');
            $table->string('web');
            $table->string('status');
            $table->string('partial');
            $table->string('bank');
            $table->string('team');
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
