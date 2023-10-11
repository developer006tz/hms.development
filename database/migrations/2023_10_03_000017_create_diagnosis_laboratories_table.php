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
        Schema::create('diagnosis_laboratories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lab_no');
            $table->string('diagnosis_laboratory_name')->nullable();
            $table->string('diagnosis_laboratory_location')->nullable();
            $table->foreignId('department_id');
            $table->string('lab_type');
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosis_laboratories');
    }
};
