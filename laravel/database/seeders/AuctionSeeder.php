<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('auctions')->insert([
            [
                'ad' => 'Mona Lisa',
                'aciklama' => 'Bir sanat eserinin açık artırması.',
                'eser_id' => 1,
                'başlangıç_fiyatı' => 1000.00,
                'anlık_fiyat' => 1200.00,
                'kazanan_id' => 2,
                'başlangıç_tarihi' => '2024-01-01 10:00:00',
                'bitiş_tarihi' => '2024-01-10 20:00:00',
                'durum' => 'devam ediyor',
            ],
        ]);
    }
}
