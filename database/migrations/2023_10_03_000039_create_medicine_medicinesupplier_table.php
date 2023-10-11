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
        Schema::create('medicine_medicinesupplier', function (
            Blueprint $table
        ) {
            $table->unsignedBigInteger('medicine_id');
            $table->unsignedBigInteger('medicine_supplier_id');
            $table->bigIncrements('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_medicinesupplier');
    }
};
