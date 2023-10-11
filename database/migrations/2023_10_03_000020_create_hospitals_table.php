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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hospital_name');
            $table->string('hospital_logo')->nullable();
            $table->string('hospital_location');
            $table->string('hospital_address_one')->nullable();
            $table->string('hospital_address_two')->nullable();
            $table->string('hospital_tinnumber')->nullable();
            $table->string('hospital_phonenumber');
            $table->string('hospital_email')->nullable();
            $table->string('hospital_city');
            $table->string('hospital_country');
            $table->string('hospital_zipcode')->nullable();
            $table->string('hospital_fax')->nullable();
            $table->string('hospital_website_link')->nullable();
            $table->unsignedBigInteger('hospital_type_id')->nullable();
            $table->unsignedBigInteger('package_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
