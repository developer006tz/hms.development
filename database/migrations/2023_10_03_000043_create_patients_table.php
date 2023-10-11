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
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_no');
            $table->string('patient_middlename')->nullable();
            $table->string('patient_firstname');
            $table->string('patient_lastname');
            $table->string('patient_email')->unique('patient_email');
            $table->string('patient_address')->nullable();
            $table->string('patient_phonenumber')->nullable();
            $table->enum('patient_gender', ['male', 'female', 'others']);
            $table->date('patient_dob')->nullable();
            $table->enum('has_insurance', ['yes', 'no'])->default('no');
            $table->string('patient_city')->nullable();
            $table->string('patient_zipcode')->nullable();
            $table->foreignId('patient_nationality');
            $table->string('patient_password');
            $table->string('patient_default_password');
            $table->string('patient_photo')->nullable();
            $table->foreignId('hospital_id');
            $table->unsignedBigInteger('user_id');
            $table->foreignId('blood_group_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
