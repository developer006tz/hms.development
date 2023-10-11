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
        Schema::create('maintanance_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('asset_maintanance_id');
            $table->enum('maintanance_type', ['in', 'out'])->nullable();
            $table->decimal('maintanance_cost')->nullable();
            $table->string('maintanance_vendor');
            $table->string('maintanance_description')->nullable();
            $table
                ->enum('maintanance_category', [
                    'preventive',
                    'routine',
                    'corrective',
                ])
                ->nullable();
            $table->date('maintanance_date');
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintanance_records');
    }
};
