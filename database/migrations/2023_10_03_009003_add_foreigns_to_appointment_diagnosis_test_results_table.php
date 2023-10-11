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
        Schema::table('appt_diag_test_res', function (
            Blueprint $table
        ) {
            $table
                ->foreign('appointment_diagnosis_test_id')
                ->references('id')
                ->on('appointment_diagnosis_tests')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE')
                ->name('fk_adtr_adtt_id'); // Specify a custom name here
          
            $table
                ->foreign('staff_id')
                ->references('id')
                ->on('staffs')
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
        Schema::table('appt_diag_test_res', function (
            Blueprint $table
        ) {
            $table->dropForeign('fk_adtr_adtt_id'); // Use the same custom name here
            $table->dropForeign(['staff_id']);
            $table->dropForeign(['hospital_id']);
        });
    }
};

