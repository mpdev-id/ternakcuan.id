<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CopyWriting>
 */
class CopyWritingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'headline' => 'Ternak Cuan Lebih Cepat di Era Digital! 🚀',
            'subheadline' => 'Bergabunglah di kemitraan digital marketing paling lengkap dan terpercaya. Tumbuhkan bisnismu bareng TernakCuan.id!',
            'CTAButton' => 'Gabung Sekarang',
            'CTAlink' => 'https://ternakcuan.id/#join',
        ];
    }
}
