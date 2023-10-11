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
        Schema::create('medicine_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id');
            $table->string('invoice_no');
            $table->decimal('invoice_balance')->nullable();
            $table->string('invoice_tin_no')->nullable();
            $table->foreignId('payment_type_id');
            $table->string('invoice_LPO_no')->nullable();
            $table->string('invoice_person')->nullable();
            $table->string('invoice_to')->nullable();
            $table->foreignId('phamacy_id');
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
        Schema::dropIfExists('medicine_invoices');
    }
};
