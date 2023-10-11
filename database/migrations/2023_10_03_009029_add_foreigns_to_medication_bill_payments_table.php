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
        Schema::table('medication_bill_payments', function (Blueprint $table) {
            $table
                ->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('invoice_id')
                ->references('id')
                ->on('invoices')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('appointment_id')
                ->references('id')
                ->on('appointments')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('payment_type_id')
                ->references('id')
                ->on('payment_types')
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
        Schema::table('medication_bill_payments', function (Blueprint $table) {
            $table->dropForeign(['patient_id']);
            $table->dropForeign(['invoice_id']);
            $table->dropForeign(['appointment_id']);
            $table->dropForeign(['payment_type_id']);
            $table->dropForeign(['hospital_id']);
        });
    }
};
