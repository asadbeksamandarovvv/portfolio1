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
        Schema::create('abouts', function (Blueprint $table) 
        {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('full_name');
            $table->string('birthday');
            $table->string('website');
            $table->string('phone');
            $table->string('city');
            $table->string('age');
            $table->string('degree');
            $table->string('email');
            $table->string('freelance');
            $table->string('sub_title');
            $table->string('happy_clients');
            $table->string('projects');
            $table->string('hours_of_support');
            $table->string('awards');
            $table->string('skils_title');
            $table->string('html');
            $table->string('css');
            $table->string('javascript');
            $table->string('php');
            $table->string('laravel');
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
