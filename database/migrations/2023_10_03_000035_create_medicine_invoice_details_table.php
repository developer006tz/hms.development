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
        Schema::create('medicine_invoice_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('medicine_id');
            $table->bigInteger('quantity')->nullable();
            $table->decimal('price');
            $table->foreignId('patient_id');
            $table->string('patient_name')->nullable();
            $table->decimal('discount')->nullable();
            $table->foreignId('phamacy_id');
            $table->foreignId('hospital_id');
            $table->unsignedBigInteger('medicine_invoice_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_invoice_details');
    }
};
