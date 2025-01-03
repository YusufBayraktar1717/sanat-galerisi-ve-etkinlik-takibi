<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'role_type'=>'admin',

        ]);
        DB::table('roles')->insert([
            'role_type'=>'visitor',

        ]);
        DB::table('roles')->insert([
            'role_type'=>'user',

        ]);
    }
}
