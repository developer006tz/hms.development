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
        Schema::create('medication_recommendations', function (
            Blueprint $table
        ) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id');
            $table->foreignId('doctor_id');
            $table->text('medical_recommendation_description')->nullable();
            $table->foreignId('medicine_id');
            $table->enum('phamacy_status', ['accepted', 'pending']);
            $table->enum('bill_status', ['paid', 'unpaid']);
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('hospital_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medication_recommendations');
    }
};
