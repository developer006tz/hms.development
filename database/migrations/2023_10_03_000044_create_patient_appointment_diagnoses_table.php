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
        Schema::create('patient_appointment_diagnoses', function (
            Blueprint $table
        ) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id');
            $table->foreignId('doctor_id');
            $table->longText('symptoms');
            $table->longText('diagnosis_description')->nullable();
            $table->foreignId('lab_id');
            $table->foreignId('hospital_id');
            $table->unsignedBigInteger('appointment_id');
            $table->string('status')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_appointment_diagnoses');
    }
};
