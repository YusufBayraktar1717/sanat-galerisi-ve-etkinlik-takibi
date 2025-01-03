<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'kullaniciAdi' => 'Admin Kullanıcı',
                'email' => 'admin@example.com',
                'sifre' => Hash::make('admin123'), // Şifreyi hashliyoruz
                'telefon' => '05551234567',
                'role' => 'admin', // Role enum değerine uygun
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kullaniciAdi' => 'Normal Kullanıcı',
                'email' => 'user@example.com',
                'sifre' => Hash::make('user123'), // Şifreyi hashliyoruz
                'telefon' => '05557654321',
                'role' => 'user', // Role enum değerine uygun
                'email_verified_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kullaniciAdi' => 'Ziyaretçi Kullanıcı',
                'email' => 'visitor@example.com',
                'sifre' => Hash::make('visitor123'), // Şifreyi hashliyoruz
                'telefon' => '05559876543',
                'role' => 'visitor', // Role enum değerine uygun
                'email_verified_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
