<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
         
        Product::create([
            'name' => "Sleeveless",
            'price' => rand(10, 300),
            'category_id' => 1,
            'shop_id' => 1,
        ]);


        Product::create([
            'name' => "Pants",
            'price' => rand(10, 300),
            'category_id' => 1,
            'shop_id' => 1,
        ]);  
        
        
        Product::create([
            'name' => "Trousers",
            'price' => rand(10, 300),
            'category_id' => 1,
            'shop_id' => 1,
        ]);
        
        
        Product::create([
            'name' => "Pockets",
            'price' => rand(10, 300),
            'category_id' => 1,
            'shop_id' => 1,
        ]);   
        
        
        Product::create([
            'name' => "Spray",
            'price' => rand(10, 300),
            'category_id' => 2,
            'shop_id' => 2,
        ]);    
        
        
        Product::create([
            'name' => "Lotion",
            'price' => rand(10, 300),
            'category_id' => 2,
            'shop_id' => 2,
        ]);  
        
        
        Product::create([
            'name' => "Wireless",
            'price' => rand(10, 300),
            'category_id' => 3,
            'shop_id' => 3,
        ]);
          
    }
}
