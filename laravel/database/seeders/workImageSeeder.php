<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class workImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('work_images')->insert([
            [
                'dosya_yolu' => 'https://www.istanbulsanatevi.com/wp-content/uploads/2015/12/vincent-van-gogh-yildizli-gece-ftd.jpg', // Yıldızlı Gece
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dosya_yolu' => 'https://upload.wikimedia.org/wikipedia/commons/6/65/Classic_view_of_The_Thinker_%288437831806%29.jpg', // Düşünen Adam
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dosya_yolu' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/The_Last_Supper_-_Leonardo_Da_Vinci_-_High_Resolution_32x16.jpg/700px-The_Last_Supper_-_Leonardo_Da_Vinci_-_High_Resolution_32x16.jpg', // Son Akşam Yemeği
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dosya_yolu' => 'https://www.tablohane.com/img/blogKapak/salvador-dali-bellegin-azmi-tablosu-la-persistencia-de-la-memoria-blogkapak.jpg', // Eriyen Saatler
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dosya_yolu' => 'https://media.babil.com/kitap/2179722_kuzgun_320_33490.jpeg', // Kuzgun
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
