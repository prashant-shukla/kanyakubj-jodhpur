<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id(); // Primary key: auto-incrementing ID
            $table->string('fullname'); // Full name of the person contacting
            $table->string('email'); // Email address of the person contacting
            $table->string('phone_number')->nullable(); // Phone number of the person contacting (optional)
            $table->string('subject'); // Subject of the message
            $table->text('message'); // Message content
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
        Schema::dropIfExists('contact_us');
    }
}
