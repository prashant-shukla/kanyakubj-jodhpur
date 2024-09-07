<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchieversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievers', function (Blueprint $table) {
            $table->id(); // Primary key: auto-incrementing ID
            $table->string('image')->nullable(); // URL/path of the achiever's image (optional)
            $table->string('name'); // Name of the achiever
            $table->string('field'); // Field or category (e.g., student, researcher, etc.)
            $table->text('description'); // Description of the achievement
            $table->year('year'); // Year of the achievement
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
        Schema::dropIfExists('achievers');
    }
}
