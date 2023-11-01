<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Evan Tanuwijaya",
            "email" => "evantanu@gmail.com",
            "password" => Crypt::encryptString("123"),
            "phone" => "0812345678",
            "age" => 27,
        ]);
        User::create([
            "name" => "Budi Sulaiman",
            "email" => "budisula@gmail.com",
            "password" => Crypt::encryptString("123"),
            "phone" => "0812345678",
            "age" => 20,
        ]);
    }
}
