<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      About::create([
            'title' => 'Siapa Kami?',
            'description' => "TernakCuan.id adalah platform Imers (Internet Marketers) digital marketing yang menghubungkan pebisnis dengan para ahli pemasaran digital terbaik. Misi kami sederhana: mempercepat pertumbuhan bisnis dan membantu semua orang 'beternak cuan' di dunia digital",
        ]);
    }
}
