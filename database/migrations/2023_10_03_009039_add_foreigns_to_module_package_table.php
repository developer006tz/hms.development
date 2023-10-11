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
        Schema::table('module_package', function (Blueprint $table) {
            $table
                ->foreign('module_id')
                ->references('id')
                ->on('modules')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('package_id')
                ->references('id')
                ->on('packages')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('module_package', function (Blueprint $table) {
            $table->dropForeign(['module_id']);
            $table->dropForeign(['package_id']);
        });
    }
};
