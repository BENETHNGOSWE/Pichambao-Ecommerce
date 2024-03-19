<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
                [
                    "name"=> "admin",
                    "email"=> "admin@gmail.com",
                    "password"=> bcrypt("123"),
                    "is_admin" => true,
                ]
            ];
        User::insert($admin);    
    }
}
