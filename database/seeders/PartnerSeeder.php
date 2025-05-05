<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'type' => 'agregator',
            'name' => 'Lincah.id',
            'logo' => 'https://ternakuang.id/wp-content/uploads/2024/12/lincah-id-logo.png',
            'url' => 'https://www.lincah.id/',
        ]);

        Partner::create([
            'type' => 'agregator',
            'name' => 'Mengantar',
            'logo' => 'https://ternakuang.id/wp-content/uploads/2024/12/mengantar-logo.png',
            'url' => 'https://www.mengantar.co.id/',
        ]);

        Partner::create([
            'type' => 'agregator',
            'name' => 'Kiriminaja',
            'logo' => 'https://ternakuang.id/wp-content/uploads/2024/12/kiriminaja-logo.png',
            'url' => 'https://www.kiriminaja.com/',
        ]);

        Partner::create([
            'type' => 'ekspedisi',
            'name' => 'JNE',
            'logo' => 'https://ternakuang.id/wp-content/uploads/2024/12/jne-logo.png',
            'url' => 'https://www.jne.co.id/',
        ]);
    }
}
