<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ShopSeeder::class,
            CatogeryTableSeeder::class,
            ProductSeeder::class,
            OrderTableSeeder::class,
        ]);
    }
}
