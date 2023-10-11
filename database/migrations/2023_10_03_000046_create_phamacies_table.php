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
        Schema::create('phamacies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phamacy_name');
            $table->string('phamacy_address');
            $table->string('phamacy_licence')->nullable();
            $table->string('phamacy_phoneumber');
            $table->string('phamacy_email');
            $table->string('phamacy_branch')->nullable();
            $table->string('phamacy_approval_document')->nullable();
            $table->foreignId('hospital_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phamacies');
    }
};
