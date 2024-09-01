<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();

            // Basic member details
            $table->string('first_name');               // First Name
            $table->string('last_name');                // Last Name
            $table->string('avatar');                   // Avatar
            $table->date('dob');                        // Date of Birth
            $table->string('father_name')->nullable();  // Father's Name
            $table->text('residential_address')->nullable();  // Residential Address
            $table->text('office_address')->nullable();       // Office Address
            $table->string('resident_phone')->nullable();     // Resident Phone Number
            $table->string('office_phone')->nullable();       // Office Phone Number
            $table->string('mobile')->unique();          // Mobile Number
            $table->string('gotra');                    // Gotra
            $table->string('aspad')->nullable();        // Aspad
            $table->string('blood_group');              // Blood Group

            // JSON field to store other members' details
            $table->json('other_members')->nullable();  // Store all related fields as JSON

            $table->timestamps(); // Created at and updated at timestamps
        });

        // Add unique index for first_name, last_name, and dob combination
        Schema::table('members', function (Blueprint $table) {
            $table->unique(['first_name', 'last_name', 'dob']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            // Drop the unique index first
            $table->dropUnique(['first_name', 'last_name', 'dob']);
        });

        Schema::dropIfExists('members');
    }
};
