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
        Schema::create('sales_people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('return_type', ['patient', 'supplier']);
            $table->foreignId('medicine_id');
            $table->date('return_date')->nullable();
            $table->string('customer_information')->nullable();
            $table->bigInteger('return_quantity')->nullable();
            $table->string('return_notes')->nullable();
            $table->decimal('stock_total')->nullable();
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
        Schema::dropIfExists('sales_people');
    }
};
