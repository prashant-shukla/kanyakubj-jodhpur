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
            $table->string('number');
            $table->string('image')->nullable(); // URL/path of the member's image
            $table->string('position'); // Position in the committee
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

