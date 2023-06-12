<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatogeryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['clothes', 'electronic', 'perfume']; 

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
