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
        Schema::table('patient_physiotherapy_application', function (
            Blueprint $table
        ) {
             // Use unique constraint names
        $table->foreign('patient_id', 'fk_patient_physio_patient_id')
        ->references('id')
        ->on('patients')
        ->onUpdate('CASCADE')
        ->onDelete('CASCADE');

    $table->foreign('physiotherapy_application_id', 'fk_patient_physio_application_id')
        ->references('id')
        ->on('physiotherapy_applications')
        ->onUpdate('CASCADE')
        ->onDelete('CASCADE');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patient_physiotherapy_application', function (
            Blueprint $table
        ) {
            $table->dropForeign(['patient_id']);
            $table->dropForeign(['physiotherapy_application_id']);
        });
    }
};
