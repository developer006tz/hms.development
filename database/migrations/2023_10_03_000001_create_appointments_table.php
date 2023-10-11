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
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('receptionist_id');
            $table->foreignId('doctor_id');
            $table->dateTime('appointment_datetime');
            $table
                ->enum('appointment_status', [
                    'pending',
                    'canceled',
                    'transfer',
                    'accept',
                ])
                ->nullable();
            $table->string('insuarance_status')->nullable();
            $table->decimal('amount');
            $table->string('remark_status')->nullable();
            $table->foreignId('patient_id');
            $table->foreignId('preliminary_measurement_id');
            $table->foreignId('hospital_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
