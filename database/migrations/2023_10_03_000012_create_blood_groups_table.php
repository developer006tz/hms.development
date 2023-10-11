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

        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_groups');
    }
};
