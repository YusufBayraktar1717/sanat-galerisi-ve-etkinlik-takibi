<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(CategorySeeder::class);
        $this->call(workImageSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(EventCategorySeeder::class);
        $this->call(EventSeeder::class);
        $this->call(workSeeder::class);
        $this->call(userSeeder::class);
        $this->call(AuctionSeeder::class);


        // User::factory(10)->create();
    }
}
