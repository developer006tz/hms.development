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
        Schema::create('medicine_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stock_batch');
            $table->bigInteger('stock_initial_quantity')->nullable();
            $table->bigInteger('stock_available_quantity')->nullable();
            $table->date('stock_entry_date');
            $table->date('stock_expire_date');
            $table->string('stock_remark')->nullable();
            $table->string('stock_reorder-level')->nullable();
            $table->string('stock_expire_alert')->nullable();
            $table->unsignedBigInteger('medicine_supplier_id');
            $table->foreignId('phamacy_id');
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_stocks');
    }
};
