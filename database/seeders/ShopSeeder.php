<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        $shopsData = [
            [
                'name' => 'zara',
                'country' => 'egypt',
                'longitude' => 40.7128,
                'latitude' => -74.0060,
            ],
            [
                'name' => 'Merchant',
                'country' => 'us',
                'longitude' => 34.0522,
                'latitude' => -118.2437,
            ],

              [
                'name' => 'angel',
                'country' => 'france',
                'longitude' => 38.0522,
                'latitude' => -95.2437,
            ],
        ];

        foreach ($shopsData as $data) {
            Shop::create($data);
        }
    }
    
}
