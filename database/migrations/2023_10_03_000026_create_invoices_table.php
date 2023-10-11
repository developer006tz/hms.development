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
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id');
            $table->decimal('invoice_balance')->nullable();
            $table->decimal('paid_ammount');
            $table->string('remark')->nullable();
            $table->foreignId('appointment_id');
            $table
                ->enum('invoice_status', ['paid', 'unpaid', 'patial paid'])
                ->nullable();
            $table->foreignId('hospital_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
