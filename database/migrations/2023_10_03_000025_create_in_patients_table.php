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
        Schema::create('in_patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id');
            $table->foreignId('appointment_diagnosis_test_id');
            $table->unsignedBigInteger('hospital_id');
            $table->unsignedBigInteger('doctor_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_patients');
    }
};
