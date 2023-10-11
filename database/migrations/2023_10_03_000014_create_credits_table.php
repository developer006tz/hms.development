<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('credit_client');
            $table->date('credit_date');
            $table->string('credit_address');
            $table->string('credit_phonenumber');
            $table->foreignId('staff_id');
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credits');
    }
};
