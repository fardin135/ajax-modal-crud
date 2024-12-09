<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\factory as faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 
        $faker = Faker::create();
            for ($i=0; $i <21 ; $i++) { 
                User::create([
                    "name"=> $faker->name,
                    "email"=> $faker->unique()->email,
                    "location" => $faker->city,
                    // "email_verified_at" => now(),
                    "password" => $faker->password,
                    // "remember_token" => Str::random(10),
                ]);
            }
        User::create([
            "name" => "Fardin",
            "email" => "Fardin@gmail.com",
            "location" => "Dhaka",
            // "email_verified_at" => now(),
            "password" => "Fardin@gmail",
            // "remember_token" => Str::random(10),
        ]);
        User::create([
            "name" => "Faiaz",
            "email" => "Faiaz@gmail.com",
            "location" => "Barisal",
            // "email_verified_at" => now(),
            "password" => "Faiaz@gmail",
            // "remember_token" => Str::random(10),
        ]);
        User::create([
            "name" => "Khan",
            "email" => "Khan@gmail.com",
            "location" => "Rangpur",
            // "email_verified_at" => now(),
            "password" => "Khan@gmail",
            // "remember_token" => Str::random(10),
        ]);
    }
}
