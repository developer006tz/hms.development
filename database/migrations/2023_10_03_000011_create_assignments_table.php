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
        Schema::create('assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('asset_id');
            $table->foreignId('staff_id');
            $table->date('assignment_date');
            $table->date('assignment_return_date')->nullable();
            $table
                ->enum('assignment_condition', ['good', 'demaged'])
                ->nullable();
            $table->string('assignment_usage_history')->nullable();
            $table->longText('assignment_description')->nullable();
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
