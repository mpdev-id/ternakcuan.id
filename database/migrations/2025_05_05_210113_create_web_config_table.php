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
        Schema::create('web_config', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('favicon')->default('https://ternakcuan.id/asset/favicon.ico')->nullable();
            $table->string('title')->default('Ternak Cuan')->nullable();
            $table->string('main_title')->default('PT SAHABAT DWIKARYA DIGITAL')->nullable();
            $table->string('main_address')->nullable();
            $table->string('main_color')->default('#8C26DFFF');
            $table->string('main_description')->default('create your passive income')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_config');
    }
};
