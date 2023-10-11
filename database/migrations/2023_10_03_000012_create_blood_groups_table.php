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
        Schema::create('blood_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('blood_group_name');
            $table->text('blood_group_description');
            // $table->foreignId('hospital_id')->constrained('hospitals')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('hospital_id')->nullable();

            $table->timestamps();
        });

        // Schema::table('patients', function (Blueprint $table) {
        //     $table->foreignId('blood_group_id')->after('user_id')->nullable()->constrained('blood_groups');
        // });

        // Schema::table('blood_donors', function (Blueprint $table) {
        //     $table->foreignId('blood_group_id')->after('user_id')->nullable()->constrained('blood_groups');
        // });

        // Schema::table('blood_requests', function (Blueprint $table) {
        //     $table->foreignId('blood_group_id')->after('user_id')->nullable()->constrained('blood_groups');
        // });

        // Schema::table('blood_transfusions', function (Blueprint $table) {
        //     $table->foreignId('blood_group_id')->after('user_id')->nullable()->constrained('blood_groups');
        // });

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

        DB::table('blood_groups')->insert($blood_group_data);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_groups');
    }
};
