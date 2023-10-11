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
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medicine_name');
            $table->decimal('medicine_amount');
            $table->foreignId('medicine_type_id');
            $table->date('medicine_expire_date');
            $table->string('medicine_barcode')->nullable();
            $table->string('medicine_generic_name');
            $table->longText('medicine_description')->nullable();
            $table->string('medicine_image')->nullable();
            $table
                ->enum('medicine_status', ['publish', 'unpuplish'])
                ->nullable();
            $table->string('medicine_manufacture');
            $table->date('medicine_manufacture_date')->nullable();
            $table->date('medicine_entry_date')->nullable();
            $table->decimal('medicine_discount')->nullable();
            $table->foreignId('hospital_id');
            $table->foreignId('phamacy_id');
            $table->unsignedBigInteger('unit_type_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
