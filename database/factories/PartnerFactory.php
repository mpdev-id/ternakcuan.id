<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['agregator', 'ekspedisi']),
            'name' => $this->faker->company,
            'logo' => $this->faker->imageUrl(200, 100, 'business', true, 'logo'),
            'url' => $this->faker->url,
        ];
    }
}
