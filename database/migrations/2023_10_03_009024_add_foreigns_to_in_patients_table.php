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
        Schema::table('in_patients', function (Blueprint $table) {
            $table
                ->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('appointment_diagnosis_test_id')
                ->references('id')
                ->on('appointment_diagnosis_tests')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('hospital_id')
                ->references('id')
                ->on('hospitals')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('doctor_id')
                ->references('id')
                ->on('staffs')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('in_patients', function (Blueprint $table) {
            $table->dropForeign(['patient_id']);
            $table->dropForeign(['appointment_diagnosis_test_id']);
            $table->dropForeign(['hospital_id']);
            $table->dropForeign(['doctor_id']);
        });
    }
};
