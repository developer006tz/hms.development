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
        Schema::create('doctor_appointment_payments', function (
            Blueprint $table
        ) {
            $table->bigIncrements('id');
            $table->foreignId('doctor_appointment_id');
            $table->decimal('amount_paid');
            $table->decimal('payment_day');
            $table->unsignedBigInteger('patient_id');
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_appointment_payments');
    }
};
