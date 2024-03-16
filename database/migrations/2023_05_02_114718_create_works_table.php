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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('tittle',60);
            $table->string('meta',150);
            $table->string('heading');
            $table->string("slug", 150);
            $table->string('description', 10000);
            $table->string('image');
            $table->string('categories');
            $table->string('fb')->nullable(); 
            $table->string('insta')->nullable(); 
            $table->string('twi')->nullable(); 
            $table->string('web')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
