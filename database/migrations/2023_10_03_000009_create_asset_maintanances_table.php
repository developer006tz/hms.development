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
        Schema::create('asset_maintanances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('asset_id');
            $table->date('request_date');
            $table->unsignedBigInteger('staff_id');
            $table->longText('asset_maintanance_description')->nullable();
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_maintanances');
    }
};
