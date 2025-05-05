<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  \App\Models\Quote;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Quote::create([
            'image' => null,
            'quote' => 'Ask not what your country can do for you, ask what you can do for your country.',
            'quoted_by' => 'John F. Kennedy',
        ]);

        Quote::create([
            'image' => null,
            'quote' => 'Ketika Anda memiliki uang, Anda memiliki kekuatan.',
            'quoted_by' => 'Bob Sadino',
        ]);

        Quote::create([
            'image' => null,
            'quote' => 'Barang siapa yang memiliki iman, maka Allah akan memberikan jalan keluar baginya dalam kesulitan dan melapangkan rezekinya dari sumber yang tidak disangka-sangka.',
            'quoted_by' => 'Hadis',
        ]);
    }
}
