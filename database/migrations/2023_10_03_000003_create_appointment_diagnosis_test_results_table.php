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
        Schema::create('appt_diag_test_res', function (
            Blueprint $table
        ) {
            $table->bigIncrements('id');
            $table->foreignId('appointment_diagnosis_test_id');
            $table->foreignId('staff_id');
            $table->unsignedBigInteger('patient_id');
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
        Schema::dropIfExists('appt_diag_test_res');
    }
};
