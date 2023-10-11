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
        Schema::create('module_package', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('module_id')->nullable();
            $table->unsignedBigInteger('package_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_package');
    }
};
