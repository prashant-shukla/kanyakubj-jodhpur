<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tributes', function (Blueprint $table) {
            $table->id(); // Primary key: auto-incrementing ID
            $table->string('image')->nullable(); // URL/path of the tribute's image (optional)
            $table->string('name'); // Name of the person being honored
            $table->date('d_o_b'); // Date of Birth
            $table->date('d_o_d'); // Date of Death (nullable if still living)
            $table->text('description'); // Description of the tribute
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
        Schema::dropIfExists('tributes');
    }
}
