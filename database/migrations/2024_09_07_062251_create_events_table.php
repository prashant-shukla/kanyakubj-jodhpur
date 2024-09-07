<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Primary key: auto-incrementing ID
            $table->string('image')->nullable(); // URL/path of the event image (optional)
            $table->string('venue'); // Venue of the event
            $table->string('title'); // Title of the event
            $table->date('start_date'); // Date and time of the event
            $table->date('end_date'); // Date and time of the event
            $table->time('start_time'); // Date and time of the event
            $table->time('end_time'); // Date and time of the event
            $table->string('speaker_chief_guest')->nullable(); // Speaker or chief guest (optional)
            $table->text('description')->nullable(); // Description of the event (optional)
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
        Schema::dropIfExists('events');
    }
}
