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
        Schema::create('document_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_category_id')->constrained()->onDelete('cascade'); 
            $table->string('file_path'); 
            $table->string('file_type')->default('pdf'); 
            $table->string('title'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_media');
    }
};
