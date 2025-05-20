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
        Schema::create('dropship', function (Blueprint $table) {
            $table->id();
            $table->string('headline')->default('Pusat Reseller / Dropship <strong>Ternak Cuan</strong>')->nullable();
            $table->string('subheadline')->default('Kami menyediakan ribuan produk fashion dengan harga termurah
untuk dipasarkan di Shopee, Tokopedia, Bukalapak, Lazada,
Tiktok, Blibli, Instagram, Facebook, Whatsapp dll.')->nullable();
            $table->string('CTAlink')->default('https://ternakcuan.id/dropship')->nullable();
            $table->string('CTAButton')->default('Daftar Sekarang')->nullable();
            $table->string('company_video')->default('main_image.png')->nullable();
            $table->string('main_description')->default("Kembangkan bisnismu melalui Dropship dengan TernakCuan")->nullable();
            $table->string('about_title')->default('Tentang Kami')->nullable();
            $table->string('about_description')->default('Kami menyediakan ribuan produk fashion dengan harga termurah untuk dipasarkan di Shopee, Tokopedia, Bukalapak, Lazada, Tiktok, Blibli, Instagram, Facebook, Whatsapp dll.')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dropship');
    }
};
