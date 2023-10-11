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
        Schema::create('hospital_identification_numbers', function (
            Blueprint $table
        ) {
            $table->bigIncrements('id');
            $table->string('prefix')->nullable();
            $table->unsignedBigInteger('hospital_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospital_identification_numbers');
    }
};
