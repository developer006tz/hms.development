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
        Schema::create('physiotherapy_applications', function (
            Blueprint $table
        ) {
            $table->bigIncrements('id');
            $table->foreignId('doctor_id');
            $table->foreignId('physiotherapy_type_id');
            $table->foreignId('physiotherapy_category_id');
            $table->date('physiotherapy_entry_date')->nullable();
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physiotherapy_applications');
    }
};
