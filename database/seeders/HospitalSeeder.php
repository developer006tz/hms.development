<?php

namespace Database\Seeders;

use App\Models\Hospital;
use DB;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hospital = [
            
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
            
        ];

        
        Hospital::create($hospital);
        
    }
}
