<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitteeYear extends Model {
    use HasFactory;

    protected $fillable = [
        'committee_id',
        'committee_name',
        'committee_start_date',
    ];
}
