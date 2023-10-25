<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name"=> "Amanda",
                "email"=> "amanda@net.com",
                "email_verified_at"=> null,
                "password"=> bcrypt("amanda123"),
                'remember_token' => Str::random(10),
                "created_at"=> now(),
                "updated_at"=> now(),
            ],
            [
                "name"=> "Maroti",
                "email"=> "marotihusna@gmail.com",
                "email_verified_at"=> null,
                "password"=> bcrypt("maroti123"),
                'remember_token' => Str::random(10),
                "created_at"=> now(),
                "updated_at"=> now(),
            ]
        ]);
    }
}
