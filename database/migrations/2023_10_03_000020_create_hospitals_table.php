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
            $table->string('hospital_phonenumber')->nullable();
            $table->string('hospital_email')->unique('hospital_email');
            $table->string('hospital_city');
            $table->string('hospital_country');
            $table->string('hospital_zipcode')->nullable();
            $table->string('hospital_fax')->nullable();
            $table->string('hospital_website_link')->nullable();
            $table->unsignedBigInteger('hospital_type_id')->nullable();
            $table->unsignedBigInteger('package_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $hospital = [
                [
                    'hospital_name' => 'Hospital 1',
                    'hospital_location' => 'Hospital 1 Location',
                    'hospital_address_one' => 'Hospital 1 Address One',
                    'hospital_address_two' => 'Hospital 1 Address Two',
                    'hospital_tinnumber' => 'Hospital 1 Tin Number',
                    'hospital_phonenumber' => 'Hospital 1 Phone Number',
                    'hospital_email' => 'hospital@gmail.com',
                    'hospital_city' => 'Hospital 1 City',
                    'hospital_country' => 'Hospital 1 Country',
                    'hospital_zipcode' => 'Hospital 1 Zipcode',
                    'hospital_fax' => 'Hospital 1 Fax',
                    'hospital_website_link' => 'Hospital 1 Website Link',
                    'hospital_type_id' => null,
                    'package_id' => null,
                ],
            ];

            DB::table('hospitals')->insert($hospital);
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
