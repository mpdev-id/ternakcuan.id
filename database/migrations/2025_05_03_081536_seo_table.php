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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title')->default('Ternak Cuan - Your Pasif Income Solution');
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('meta_author')->default('Ternak Cuan');
            $table->string('meta_robots')->default('index, follow');
            $table->string('meta_canonical')->default('https://ternakcuan.id/');
            $table->string('canonical_url')->default('https://ternakcuan.id/');
            $table->string('robots')->default('index,follow');
            $table->string('og_title')->default('Ternak Cuan - Your Pasif Income Solution');
            $table->text('og_description')->nullable();
            $table->string('og_image')->default('https://ternakcuan.id/asset/og-image.png');
            $table->string('twitter_title')->default('Ternak Cuan - Your Pasif Income Solution');
            $table->text('twitter_description')->nullable();
            $table->string('twitter_image')->default('https://ternakcuan.id/asset/twitter-image.png');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seos');
    }
};
