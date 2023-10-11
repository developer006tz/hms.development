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
        Schema::table('doctor_appointment_payments', function (
            Blueprint $table
        ) {
            $table
                ->foreign('doctor_appointment_id')
                ->references('id')
                ->on('doctor_appointments')
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
        Schema::table('doctor_appointment_payments', function (
            Blueprint $table
        ) {
            $table->dropForeign(['doctor_appointment_id']);
            $table->dropForeign(['hospital_id']);
        });
    }
};
