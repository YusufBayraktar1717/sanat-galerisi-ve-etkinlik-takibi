<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['eser_turu' => 'Resim', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Heykel', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Fotoğraf', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Seramik', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Dijital Sanat', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Kaligrafi', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Mücevher Sanatı', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Performans Sanatı', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Çini', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Karikatür', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Minyatür', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Mozaik', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Hat Sanatı', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Tekstil Sanatı', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Cam İşçiliği', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Ahşap Oymacılığı', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Grafik Tasarım', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Moda Tasarımı', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Endüstriyel Tasarım', 'created_at' => now(), 'updated_at' => now()],
            ['eser_turu' => 'Duvar Resmi', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
