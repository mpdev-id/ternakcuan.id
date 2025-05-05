<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seo>
 */
class SeoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'meta_title' => 'Ternak Cuan - Your Pasif Income Solution',
            'meta_description' => "TernakCuan.id adalah platform Imers (Internet Marketers) digital marketing yang menghubungkan pebisnis dengan para ahli pemasaran digital terbaik. Misi kami sederhana: mempercepat pertumbuhan bisnis dan membantu semua orang 'beternak cuan' di dunia digital.",
            'meta_keywords' => 'ternak cuan, digital marketing, passive income, bisnis online, pemasaran digital, imers, internet marketers, ternakcuan.id',
            'meta_author' => 'Ternak Cuan',
            'meta_robots' => 'index, follow',
            'meta_canonical' => 'https://ternakcuan.id/',
            'canonical_url' => 'https://ternakcuan.id/',
            'robots' => 'index,follow',
            'og_title' => 'Ternak Cuan - Your Pasif Income Solution',
            'og_description' => "TernakCuan.id adalah platform Imers (Internet Marketers) digital marketing yang menghubungkan pebisnis dengan para ahli pemasaran digital terbaik. Misi kami sederhana: mempercepat pertumbuhan bisnis dan membantu semua orang 'beternak cuan' di dunia digital.",
            'og_image' => 'https://ternakcuan.id/asset/og-image.png',
            'twitter_title' => 'Ternak Cuan - Your Pasif Income Solution',
            'twitter_description' => "TernakCuan.id adalah platform Imers (Internet Marketers) digital marketing yang menghubungkan pebisnis dengan para ahli pemasaran digital terbaik. Misi kami sederhana: mempercepat pertumbuhan bisnis dan membantu semua orang 'beternak cuan' di dunia digital.",
            'twitter_image' => 'https://ternakcuan.id/asset/twitter-image.png',
        ];
    }
}
