<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Service::create([
            'icon' => '🔥',
            'title' => 'Meta Ads',
            'description' => 'Produk winning terpercaya, yang sudah berjalan selama 8 Tahun.',
        ]);
        \App\Models\Service::create([
            'icon' => '🛠️',
            'title' => ' Tools & Software Bisnis',
            'description' => 'Metode beriklan yang efektif yang dapat menghasilkan cuan lebih cepat.',
        ]);
        \App\Models\Service::create([
            'icon' => '🛠️',
            'title' => ' Financial Report',
            'description' => 'Strategi rangkuman arus kas lebih akurat, optimalisasi strategi bisnis & marketing, Smart Financial Planning.',
        ]);
        \App\Models\Service::create([
            'icon' => '📚',
            'title' => ' Kursus & Edukasi Digital',
            'description' => 'Upgrade skill digital marketing-mu di sini!',
        ]);
        \App\Models\Service::create([
            'icon' => '🤝',
            'title' => ' Community & Support',
            'description' => 'Temukan partner bisnis dan mentor di komunitas kami.',
        ]);
    }
}
