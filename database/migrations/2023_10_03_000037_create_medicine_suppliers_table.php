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
        Schema::create('medicine_suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('supplier_name');
            $table->string('supplier_email');
            $table->string('supplier_phonenumber');
            $table->string('supplier_address')->nullable();
            $table->string('supplier_city');
            $table->string('supplier_country');
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
        Schema::dropIfExists('medicine_suppliers');
    }
};
