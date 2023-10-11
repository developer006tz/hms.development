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
        Schema::table('appointment_diagnosis_tests', function (
            Blueprint $table
        ) {
            $table
                ->foreign(
                    'patient_appointment_diagnosis_id',
                    'foreign_alias_0000001'
                )
                ->references('id')
                ->on('patient_appointment_diagnoses')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('hospital_id')
                ->references('id')
                ->on('hospitals')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointment_diagnosis_tests', function (
            Blueprint $table
        ) {
            $table->dropForeign(['patient_appointment_diagnosis_id']);
            $table->dropForeign(['hospital_id']);
        });
    }
};
