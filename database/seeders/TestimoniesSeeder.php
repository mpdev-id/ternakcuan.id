<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Testimony::create([
            'image' => 'https://ternakuang.id/wp-content/uploads/2024/12/najiullah.jpg',
            'name' => 'Najiullah',
            'quote' => 'Gara-gara TernakCuan.id, Saya mendapatkan dividen dari kemitraan setelah 3 bulan!',
            'quoted_by' => 'Najiullah',
            'as' => 'Mitra Owner My Store',

        ]);

        \App\Models\Testimony::create([
            'image' => 'https://ternakuang.id/wp-content/uploads/2024/12/sinar-atmaja.jpg',
            'name' => 'Sinar Atmaja',
            'quote' => 'Saya jadi tau, strategi untuk bisa cuan dari omset ongkir',
            'quoted_by' => 'Sinar Atmaja',
            'as' => 'Mitra Owner Sinar Store',

        ]);

        \App\Models\Testimony::create([
            'image' => 'https://ternakuang.id/wp-content/uploads/2024/12/nurkholiq.jpg',
            'name' => 'Nurkholiq',
            'quote' => 'Keren, sudah kolaborasi dengan 17 Kota tesebar seluruh Indonesia. Sehingga saya sudah tidak takut boncos, Return',
            'quoted_by' => 'Nurkholiq',
            'as' => 'Mitra Owner My NHQ',

        ]);

        \App\Models\Testimony::create([
            'image' => 'https://ternakuang.id/wp-content/uploads/2024/12/om-bewok.jpg',
            'name' => 'Om Bewok',
            'quote' => 'Imers takut ngiklan di wilayah timur, eh ini lawan arus..Gilaa !',
            'quoted_by' => 'Om Bewok',
            'as' => 'Mitra Owner MB Store',

        ]);

    }
}
