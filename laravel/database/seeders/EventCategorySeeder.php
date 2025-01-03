<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_categories')->insert([
            [
                'ad' => 'Modern Sanat',
                'aciklama' => 'Modern sanat eserlerinin sergilendiği etkinlikler.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ad' => 'Klasik Sanat',
                'açıklama' => 'Klasik dönem sanat eserlerine odaklanan etkinlikler.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ad' => 'Heykel Sergileri',
                'açıklama' => 'Ünlü heykeltıraşların eserlerinin sergilendiği etkinlikler.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ad' => 'Fotoğraf Sergileri',
                'açıklama' => 'Sanatçıların en etkileyici fotoğraf koleksiyonları.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ad' => 'Çağdaş Sanat',
                'açıklama' => 'Günümüz sanatçılarına ait yenilikçi eserler.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

}
