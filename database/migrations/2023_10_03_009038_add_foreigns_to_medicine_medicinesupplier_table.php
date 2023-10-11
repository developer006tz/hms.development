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
        Schema::table('medicine_medicinesupplier', function (Blueprint $table) {
            $table
                ->foreign('medicine_id')
                ->references('id')
                ->on('medicines')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('medicine_supplier_id')
                ->references('id')
                ->on('medicine_suppliers')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medicine_medicinesupplier', function (Blueprint $table) {
            $table->dropForeign(['medicine_id']);
            $table->dropForeign(['medicine_supplier_id']);
        });
    }
};
