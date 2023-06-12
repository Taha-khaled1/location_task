<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
            $user = [
[
    'name' => 'محمد محمود',
   
   
    
    'email' => 'user1@example.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'name' => 'يوسف محمود',
   
    
    
    'email' => 'user2@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'name' => 'زياد خالد',
   
    
    'email' => 'user3@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'name' => 'يوسف المصري',
    
    
    'email' => 'user4@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'name' => 'احمد نجيب',

    
    'email' => 'user5@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'name' => 'مجدي افشه',

    'email' => 'user6@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'name' => 'محمد الشناوي',

    
    'email' => 'user7@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],
[
    'name' => 'اكرم توفيق',

    
    'email' => 'user8@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],
[
    'name' => 'محمد زيدان',
 
    
    'email' => 'user9@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],
[
    'name' => 'كرم نعيم',
 
    
    'email' => 'user10@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],
            ];
            DB::table('users')->insert($user);
        
    }
}
