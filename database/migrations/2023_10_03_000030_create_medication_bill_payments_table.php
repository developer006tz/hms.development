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
        Schema::create('medication_bill_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id');
            $table->decimal('amount');
            $table->foreignId('invoice_id');
            $table->foreignId('appointment_id');
            $table->foreignId('payment_type_id');
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
        Schema::dropIfExists('medication_bill_payments');
    }
};
