<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notice;
use App\Models\User;
use App\Models\CommitteeActivitie;
use App\Models\Person;
use App\Models\PersonType;
use App\Models\President;

class DatabaseSeeder extends Seeder
{
    public function run(): void{
		Notice::factory()->count(10)->create();
        CommitteeActivitie::factory()->count(10)->create();
        Person::factory()->count(10)->create();
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,
            ContactSeeder::class,
            CommitteeNameSeeder::class,
            PersonTypeSeeder::class,
            PresidentSeeder::class,
            CommitteeYearSeeder::class,
        ]);
    }
}
