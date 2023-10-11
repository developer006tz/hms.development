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
        Schema::table('medication_recommendations', function (
            Blueprint $table
        ) {
            $table
                ->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('medicine_id')
                ->references('id')
                ->on('medicines')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

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
        Schema::table('medication_recommendations', function (
            Blueprint $table
        ) {
            $table->dropForeign(['patient_id']);
            $table->dropForeign(['medicine_id']);
            $table->dropForeign(['staff_id']);
            $table->dropForeign(['hospital_id']);
        });
    }
};
