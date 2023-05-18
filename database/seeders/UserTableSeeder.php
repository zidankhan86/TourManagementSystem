<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            "name"=>"Admin",
            "email"=>"admin@gmail.com",
            "address"=>"Uttara",
            "phone"=>"01776718178",
            "password"=>bcrypt('12345'),

        ]);
    }
}
