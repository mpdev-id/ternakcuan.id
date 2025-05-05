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
        Schema::create('copywritings', function (Blueprint $table) {
            $table->id();
            $table->string('company_video')->nullable();
            $table->string('headline');
            $table->text('subheadline')->nullable();
            $table->string('CTAButton')->nullable();
            $table->string('CTAlink')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copywritings');
    }
};
