<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $table->id();
            $table->string('page_name', 100)->index(); // Limit length
            $table->string('section_key', 100)->index(); // Limit length
            $table->json('content')->nullable(); 
            $table->json('settings')->nullable(); 
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();

            // Use a separate method to add unique constraint
            $table->unique(['page_name', 'section_key'], 'page_section_unique');
        });
    }

    public function down()
    {
        Schema::dropIfExists('page_sections');
    }
};
