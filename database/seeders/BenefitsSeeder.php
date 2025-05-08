<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Benefit::create([
            'title' => 'Targeting Super Spesifik',
            'description' => 'Iklan disajikan ke orang yang benar-benar tertarik dengan produkmu. Hemat biaya, hasil maksimal!',
        ]);
        \App\Models\Benefit::create([
            'title' => 'Desain & Copy Iklan Menjual',
            'description' => 'Kami bikin konten iklan yang bikin calon pembeli berhenti scroll dan langsung klik.',
        ]);
        \App\Models\Benefit::create([
            'title' => 'Optimasi & Monitoring Harian',
            'description' => 'Kami pantau performa iklan harian & optimasi terus-menerus biar ROI makin cuan.
',
        ]);
        \App\Models\Benefit::create([
            'title' => 'Laporan Transparan & Terukur',
            'description' => 'Dapatkan laporan performa detail setiap minggu. Kamu tahu ke mana budget iklanmu mengalir',
        ]);



    }
}
