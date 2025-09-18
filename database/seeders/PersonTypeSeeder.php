<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PersonType;

class PersonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PersonType::insert([
            [
                "person_type_name" => "dakhula",
                "status"           => "active"          
            ],
            [
                "person_type_name" => "esalpa",
                "status"           => "active"
            ],
            [
                "person_type_name" => "sebari",
                "status"           => "active"
            ],
            [
                "person_type_name" => "vandari",
                "status"           => "active"
            ],
            [
                "person_type_name" => "lifeTime",
                "status"           => "active"
            ],
            [
               "person_type_name" => "general",
                "status"           => "active"
            ],
            [
               "person_type_name" => "bekar",
                "status"           => "deactive"
            ]
        ]);
    }
}
