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
        Schema::create('assets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('asset_no');
            $table->string('asset_name');
            $table->date('asset_purchase_date');
            $table->decimal('asset_purchase_cost')->nullable();
            $table->decimal('asset_current_value')->nullable();
            $table->string('asset_manufacture')->nullable();
            $table->date('asset_startdate_warant');
            $table->date('asset_enddate_warant');
            $table->string('asset_description')->nullable();
            $table->foreignId('asset_type_id');
            $table->foreignId('asset_category_id');
            $table->enum('asset_status', ['in use', 'maintanance', 'retired']);
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
