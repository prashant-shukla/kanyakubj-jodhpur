<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_gallery', function (Blueprint $table) {
            $table->id(); // Primary key: auto-incrementing ID
            $table->string('video_link'); // URL of the video
            $table->unsignedBigInteger('event_id'); // Foreign key for events

            // Setting up foreign key constraint
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');

            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_gallery');
    }
}
