<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Create some sample orders
      $orders = [
        [
            'user_id' => 1,
            'product_id' => 1,
            'quantity' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 2,
            'product_id' => 2,
            'quantity' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 3,
            'product_id' => 3,
            'quantity' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 4,
            'product_id' => 4,
            'quantity' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 5,
            'product_id' => 5,
            'quantity' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ],
      
        [
            'user_id' => 6,
            'product_id' => 6,
            'quantity' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 7,
            'product_id' => 7,
            'quantity' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

   
    foreach ($orders as $order) {
        Order::create($order);
    }
    }
}
