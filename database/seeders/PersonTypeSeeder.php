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
                "person_type_name"         => "dakhula",
            ],
            [
                "person_type_name"         => "esalpa",
            ],
            [
                "person_type_name"         => "sebari",
            ],
            [
                "person_type_name"         => "vandari",
            ],
            [
                "person_type_name"         => "lifeTime",
            ],
            [
                "person_type_name"         => "general",
            ]
            
        ]);
    }
}
