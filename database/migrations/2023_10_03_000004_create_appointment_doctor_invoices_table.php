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
        Schema::create('appointment_doctor_invoices', function (
            Blueprint $table
        ) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id');
            $table->decimal('balance');
            $table->decimal('paid_amount');
            $table->string('description')->nullable();
            $table->longText('remark')->nullable();
            $table
                ->enum('status', ['partial paid', 'not paid', 'full paid'])
                ->nullable();
            $table->unsignedBigInteger('doctor_appointment_id');
            $table->foreignId('hospital_id');
            $table->unsignedBigInteger('staff_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_doctor_invoices');
    }
};
