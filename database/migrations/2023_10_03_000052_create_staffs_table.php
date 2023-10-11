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
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('staff_no')->nullable();
            $table->string('staff_firstname');
            $table->string('staff_middlename');
            $table->string('staff_lastname');
            $table->string('staff_address')->nullable();
            $table->string('staff_photo')->nullable();
            $table->string('staff_email');
            $table->string('staff_document');
            $table->text('staff_bio')->nullable();
            $table->foreignId('department_id');
            $table->enum('staff_gender', ['male', 'female', 'others']);
            $table->unsignedBigInteger('hospital_id');
            $table->unsignedBigInteger('staff_type_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
