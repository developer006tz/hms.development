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
        Schema::table('sales_people', function (Blueprint $table) {
            $table
                ->foreign('medicine_id')
                ->references('id')
                ->on('medicines')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('phamacy_id')
                ->references('id')
                ->on('phamacies')
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
        Schema::table('sales_people', function (Blueprint $table) {
            $table->dropForeign(['medicine_id']);
            $table->dropForeign(['phamacy_id']);
            $table->dropForeign(['hospital_id']);
        });
    }
};
