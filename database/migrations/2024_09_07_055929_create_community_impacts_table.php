<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityImpactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_impacts', function (Blueprint $table) {
            $table->id(); // Primary key: auto-incrementing ID
            $table->year('year'); // Year of the community impact
            $table->string('image')->nullable(); // URL/path of the impact image
            $table->string('title'); // Title of the community impact
            $table->text('description')->nullable(); // Description of the impact (optional)
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
        Schema::dropIfExists('community_impacts');
    }
}
