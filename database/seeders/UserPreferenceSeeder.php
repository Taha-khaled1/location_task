<?php

namespace Database\Seeders;

use App\Models\UserPreference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userPreferences = [
            [
                'user_id' => 1,
                'category_id' => 1,
                'weight' => 5,
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'weight' => 3,
            ],
            [
                'user_id' => 2,
                'category_id' => 1,
                'weight' => 2,
            ],
            [
                'user_id' => 2,
                'category_id' => 3,
                'weight' => 4,
            ],
            [
                'user_id' => 3,
                'category_id' => 1,
                'weight' => 4,
            ],
            [
                'user_id' => 3,
                'category_id' => 3,
                'weight' => 8,
            ],
            // Add more user preferences as needed
        ];

        foreach ($userPreferences as $userPreference) {
            UserPreference::create($userPreference);
        }
    }
}
