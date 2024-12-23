<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitteeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->id(); // Primary key: auto-incrementing ID
            $table->string('name');
            $table->integer('order_number');
            $table->string('image')->nullable(); // URL/path of the member's image
            $table->string('position');
            $table->date('dob');                        // Date of Birth
            $table->string('father_name')->nullable();  // Father's Name
            $table->text('residential_address')->nullable();
            $table->string('mobile')->unique();          // Mobile Number
            $table->string('gotra');                    // Gotra
            $table->string('aspad')->nullable();        // Aspad
            $table->string('blood_group');  
            $table->json('other_members')->nullable(); // Position in the committee
            $table->json('social_media_links')->nullable(); // JSON or serialized social media links (optional)
            $table->unsignedBigInteger('tenure_id');
            $table->timestamps(); // Created at and updated at timestamps

            $table->foreign('tenure_id')->references('id')->on('tenures'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('committee_members');
    }
}

