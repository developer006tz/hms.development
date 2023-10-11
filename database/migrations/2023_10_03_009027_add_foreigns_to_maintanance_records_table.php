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
        Schema::table('maintanance_records', function (Blueprint $table) {
            $table
                ->foreign('asset_maintanance_id')
                ->references('id')
                ->on('asset_maintanances')
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
        Schema::table('maintanance_records', function (Blueprint $table) {
            $table->dropForeign(['asset_maintanance_id']);
            $table->dropForeign(['hospital_id']);
        });
    }
};
