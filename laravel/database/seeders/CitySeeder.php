<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            [
                'sehir_Ad' => 'Paris',
                'ilce' => 'Montmartre',
                'adres' => 'Rue de Clignancourt No:10, 75018 Paris',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sehir_Ad' => 'Londra',
                'ilce' => 'Westminster',
                'adres' => 'Trafalgar Meydanı, WC2N 5DN Londra',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sehir_Ad' => 'Milano',
                'ilce' => 'Centro Storico',
                'adres' => 'Via Torino No:15, 20123 Milano',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sehir_Ad' => 'Madrid',
                'ilce' => 'Salamanca',
                'adres' => 'Calle de Velázquez No:12, 28001 Madrid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sehir_Ad' => 'New York',
                'ilce' => 'Manhattan',
                'adres' => '5th Avenue No:789, NY 10022 New York',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
