<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void{
        User::insert([
            "name"         => "Central",
            "username"     => "bmjkscentral",
            "phone_no"     => "0171000000",
            "account_type" => "SuperAdmin",
            "branch"       => "BMJKS",
            "password"     => Hash::make('12345678'),
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
    }
}
