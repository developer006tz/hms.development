<?php

namespace Database\Seeders;

use App\Models\BloodGroup;
use DB;
use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blood_group_data = [
            [
                'blood_group_name' => 'A+',
                'blood_group_description' => 'A positive',
                'hospital_id' => 1,
            ],
            [
                'blood_group_name' => 'A-',
                'blood_group_description' => 'A negative',
                'hospital_id' => 1,
            ],
            [
                'blood_group_name' => 'B+',
                'blood_group_description' => 'B positive',
                'hospital_id' => 1,
            ],
            [
                'blood_group_name' => 'B-',
                'blood_group_description' => 'B negative',
                'hospital_id' => 1,
            ],
            [
                'blood_group_name' => 'AB+',
                'blood_group_description' => 'AB positive',
                'hospital_id' => 1,
            ],
            [
                'blood_group_name' => 'AB-',
                'blood_group_description' => 'AB negative',
                'hospital_id' => 1,
            ],
            [
                'blood_group_name' => 'O+',
                'blood_group_description' => 'O positive',
                'hospital_id' => 1,
            ],
            [
                'blood_group_name' => 'O-',
                'blood_group_description' => 'O negative',
                'hospital_id' => 1,
            ],
        ];

        foreach ($blood_group_data as $blood_group) {
            BloodGroup::create($blood_group);
        }
    }
}
