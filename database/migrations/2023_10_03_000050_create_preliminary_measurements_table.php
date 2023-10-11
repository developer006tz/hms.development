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
        Schema::create('preliminary_measurements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id');
            $table->foreignId('staff_id');
            $table->string('preasure')->nullable();
            $table->string('weight')->nullable();
            $table->decimal('height')->nullable();
            $table->json('custom_diagnosis')->nullable();
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preliminary_measurements');
    }
};
