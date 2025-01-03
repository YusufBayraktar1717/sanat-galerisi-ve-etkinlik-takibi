<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class workSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('works')->insert([
            [
                'eser_isim' => 'Yıldızlı Gece',
                'yapilidigi_yil' => '1889-06-01',
                'kategori_id' => 1, // Resim kategorisi
                'eser_gorseli_id' => 1,
                'sergilendigi_yer_id' => 1, // Paris
                'yapan_id' => 2, // Van Gogh
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'eser_isim' => 'Düşünen Adam',
                'yapilidigi_yil' => '1904-01-01',
                'kategori_id' => 2, // Heykel
                'eser_gorseli_id' => 2,
                'sergilendigi_yer_id' => 2, // Londra
                'yapan_id' =>3, // Auguste Rodin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'eser_isim' => 'Son Akşam Yemeği',
                'yapilidigi_yil' => '1498-01-01',
                'kategori_id' => 1, // Resim
                'eser_gorseli_id' => 3,
                'sergilendigi_yer_id' => 3, // Milano
                'yapan_id' =>1, // Leonardo da Vinci
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'eser_isim' => 'Eriyen Saatler',
                'yapilidigi_yil' => '1931-04-01',
                'kategori_id' => 1, // Resim
                'eser_gorseli_id' => 4,
                'sergilendigi_yer_id' => 4, // Madrid
                'yapan_id' =>4, // Salvador Dali
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'eser_isim' => 'Kuzgun',
                'yapilidigi_yil' => '1845-01-01',
                'kategori_id' => 5, // Dijital Sanat
                'eser_gorseli_id' => 5,
                'sergilendigi_yer_id' => 5, // New York
                'yapan_id' => 5, // Edgar Allan Poe
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);         }
}
