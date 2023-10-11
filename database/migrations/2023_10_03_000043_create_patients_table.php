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
            $table->string('patient_middlename');
            $table->string('patient_firstname');
            $table->string('patient_lastname');
            $table->string('patient_email')->nullable();
            $table->string('patient_address');
            $table->string('patient_phonenumber');
            $table->enum('patient_gender', ['male', 'female', 'others']);
            $table->date('patient_dob')->nullable();
            $table->string('patient_city');
            $table->string('patient_zipcode')->nullable();
            $table->string('patient_country');
            $table->string('patient_nationality');
            $table->string('patient_password');
            $table->string('patient_default_password');
            $table->string('patient_photo')->nullable();
            $table->foreignId('hospital_id');
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
        Schema::dropIfExists('patients');
    }
};
