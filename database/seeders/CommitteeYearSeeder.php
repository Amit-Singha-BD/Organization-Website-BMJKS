<?php

namespace Database\Seeders;

use App\Models\CommitteeYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommitteeYearSeeder extends Seeder {

    public function run(): void {
        CommitteeYear::factory()->count(26)->create();
    }
}
