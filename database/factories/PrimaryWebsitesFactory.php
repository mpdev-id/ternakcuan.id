<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PrimaryWebsitesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => 'Ternak Cuan',
            'logo' => 'https://ternakcuan.id/asset/logo-ternak-cuan-new-putih.png',
            'favicon' => 'https://ternakcuan.id/asset/favicon.png',
            'phone' => '+62 812 1234 5678',
            'whatsapp' => 'https://wa.me/+62881212345678',
            'instagram' => 'https://www.instagram.com/ternakcuan/',
            'facebook' => 'https://www.facebook.com/ternakcuan/',
            'twitter' => 'https://twitter.com/ternakcuan',
            'youtube' => 'https://www.youtube.com/c/TernakCuan',
            'tiktok' => 'https://www.tiktok.com/@ternakcuan',
            'linkedin' => 'https://www.linkedin.com/company/ternakcuan/',
        ];
    }
}
