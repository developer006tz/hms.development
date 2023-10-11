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
        Schema::table('diagnosis_laboratories', function (Blueprint $table) {
            $table
                ->foreign('department_id')
                ->references('id')
                ->on('departments')
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
        Schema::table('diagnosis_laboratories', function (Blueprint $table) {
            $table->dropForeign(['department_id']);
            $table->dropForeign(['hospital_id']);
        });
    }
};
