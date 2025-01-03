<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'ad' => 'Modern Sanat Sergisi',
                'aciklama' => 'Modern sanat eserlerinin yer aldığı bir sergi.',
                'baslangic_tarihi' => '2025-01-10 10:00:00', // Tarih ve saat birleştirildi
                'bitis_tarihi' => '2025-01-15 18:00:00', // Tarih ve saat birleştirildi
                'konum_id' => 1, // İstanbul
                'durum' => 'planlanıyor',
                'kategori_id' => 1, // Sergi
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ad' => 'Klasik Heykel Çalıştayı',
                'aciklama' => 'Heykel sanatına dair tekniklerin öğretildiği çalıştay.',
                'baslangic_tarihi' => '2025-02-05 09:00:00', // Tarih ve saat birleştirildi
                'bitis_tarihi' => '2025-02-07 17:00:00', // Tarih ve saat birleştirildi
                'konum_id' => 2, // Ankara
                'durum' => 'aktif',
                'kategori_id' => 2, // Çalıştay
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ad' => 'Sanat ve Teknoloji Konferansı',
                'aciklama' => 'Sanatın teknolojiyle birleştiği yeni akımları inceleyen konferans.',
                'baslangic_tarihi' => '2025-03-20 10:00:00', // Tarih ve saat birleştirildi
                'bitis_tarihi' => '2025-03-22 16:00:00', // Tarih ve saat birleştirildi
                'konum_id' => 3, // İzmir
                'durum' => 'planlanıyor',
                'kategori_id' => 3, // Konferans
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ad' => 'Rönesans Dönemi Eserleri Paneli',
                'aciklama' => 'Rönesans dönemine ait eserlerin tartışıldığı bir panel.',
                'baslangic_tarihi' => '2025-04-10 14:00:00', // Tarih ve saat birleştirildi
                'bitis_tarihi' => '2025-04-12 18:00:00', // Tarih ve saat birleştirildi
                'konum_id' => 4, // Bursa
                'durum' => 'planlanıyor',
                'kategori_id' => 4, // Panel
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ad' => 'Dijital Sanat ve Yapay Zeka Çalıştayı',
                'aciklama' => 'Dijital sanatın yapay zeka ile buluştuğu çalıştay.',
                'baslangic_tarihi' => '2025-05-15 09:30:00', // Tarih ve saat birleştirildi
                'bitis_tarihi' => '2025-05-17 17:30:00', // Tarih ve saat birleştirildi
                'konum_id' => 5, // Antalya
                'durum' => 'aktif',
                'kategori_id' => 5, // Çalıştay
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
