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
        Schema::table('physiotherapy_applications', function (
            Blueprint $table
        ) {
            $table
                ->foreign('doctor_id')
                ->references('id')
                ->on('staffs')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('physiotherapy_type_id')
                ->references('id')
                ->on('physiotherapy_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('physiotherapy_category_id')
                ->references('id')
                ->on('physiotherapy_categories')
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
        Schema::table('physiotherapy_applications', function (
            Blueprint $table
        ) {
            $table->dropForeign(['doctor_id']);
            $table->dropForeign(['physiotherapy_type_id']);
            $table->dropForeign(['physiotherapy_category_id']);
            $table->dropForeign(['hospital_id']);
        });
    }
};
