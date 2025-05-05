<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrimaryWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PrimaryWebsites::factory()->create();
        \App\Models\Seo::factory()->create();
        \App\Models\CopyWriting::factory()->create();
        // \App\Models\CopyWriting::class()->create([
        //     'company_video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        //     'headline' => 'Ternak Cuan Lebih Cepat di Era Digital! 🚀',
        //     'subheadline' => 'Bergabunglah di kemitraan digital marketing paling lengkap dan terpercaya. Tumbuhkan bisnismu bareng TernakCuan.id!',
        //     'CTAButton' => 'Gabung Sekarang',
        //     'CTAlink' => 'https://ternakcuan.id/#join',
        // ]);

        // \App\Models\About::class()->create([
        //     'title' => 'Tentang Kami',
        //     'description' => 'TernakCuan.id adalah platform Imers (Internet Marketers) digital marketing yang menghubungkan pebisnis dengan para ahli pemasaran digital terbaik. Misi kami sederhana: mempercepat pertumbuhan bisnis dan membantu semua orang \'beternak cuan\' di dunia digital.',
        //     'image' => 'https://ternakcuan.id/wp-content/uploads/2024/12/tentang-kami.png',
        // ]);


    }
}
