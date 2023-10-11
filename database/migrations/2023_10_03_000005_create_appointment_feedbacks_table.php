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
        Schema::create('appointment_feedbacks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('doctor_appointment_id');
            $table->foreignId('patient_id');
            $table->string('description');
            $table->enum('status', ['received', 'pending']);
            $table->foreignId('hospital_id');
            $table->unsignedBigInteger('doctor_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_feedbacks');
    }
};
