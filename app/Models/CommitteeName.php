<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommitteeName extends Model {

    use HasFactory;

    protected $fillable = [
        'committee_name',
        'committee_slug',
    ];
}
