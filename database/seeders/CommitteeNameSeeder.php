<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CommitteeName;

class CommitteeNameSeeder extends Seeder {

    public function run(): void {
        CommitteeName::insert([
            [
                "committee_name" => "A",
                "committee_slug" => "A",
            ],
            [
                "committee_name" => "B",
                "committee_slug" => "B",
            ],
            [
                "committee_name" => "C",
                "committee_slug" => "C",
            ],
            [
                "committee_name" => "D",
                "committee_slug" => "D",
            ],
            [
                "committee_name" => "E",
                "committee_slug" => "E",
            ],
            [
                "committee_name" => "F",
                "committee_slug" => "F",
            ],
            [
                "committee_name" => "G",
                "committee_slug" => "G",
            ],
            [
                "committee_name" => "H",
                "committee_slug" => "H",
            ],
            [
                "committee_name" => "I",
                "committee_slug" => "I",
            ],
            [
                "committee_name" => "J",
                "committee_slug" => "J",
            ],
            [
                "committee_name" => "K",
                "committee_slug" => "K",
            ],
            [
                "committee_name" => "L",
                "committee_slug" => "L",
            ],
            [
                "committee_name" => "M",
                "committee_slug" => "M",
            ],
        ]);
    }
}
