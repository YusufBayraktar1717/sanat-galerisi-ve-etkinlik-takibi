<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExhibitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exhibitions')->insert([
            [
                'sergi_adi' => 'Güzel Sanatlar Sergisi',
                'sergi_aciklama' => 'Bu sergi, modern sanatın en güzel örneklerini sergilemektedir.',
                'baslangıc_tarihi' => Carbon::now()->format('Y-m-d H:i:s'),
                'bitis_tarihi' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                'sergi_yer_id' => 1,
                'durum' => 'Sergileniyor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sergi_adi' => 'Modern Sanatlar Sergisi',
                'sergi_aciklama' => 'Yeni nesil sanatçıların eserleri ile dolu bir sergi.',
                'baslangıc_tarihi' => Carbon::now()->addDays(1)->format('Y-m-d H:i:s'),
                'bitis_tarihi' => Carbon::now()->addDays(31)->format('Y-m-d H:i:s'),
                'sergi_yer_id' => 2, // Bu şehir ID'si `cities` tablosunda mevcut olmalı
                'durum' => 'Sergileniyor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sergi_adi' => 'Klasik Eserler Sergisi',
                'sergi_aciklama' => 'Klasik dönemin en bilinen sanat eserleri burada sergileniyor.',
                'baslangıc_tarihi' => Carbon::now()->addDays(5)->format('Y-m-d H:i:s'),
                'bitis_tarihi' => Carbon::now()->addDays(35)->format('Y-m-d H:i:s'),
                'sergi_yer_id' => 3, // Bu şehir ID'si `cities` tablosunda mevcut olmalı
                'durum' => 'Sergilenmiyor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }

}
