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
        Schema::create('medication_bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bill_type');
            $table->string('quantity');
            $table->decimal('price')->nullable();
            $table->foreignId('patient_id');
            $table->longText('description')->nullable();
            $table
                ->enum('status', ['paid', 'unpaid', 'partial paid'])
                ->nullable();
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medication_bills');
    }
};
