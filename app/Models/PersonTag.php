<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonTag extends Model
{
    protected $fillable = [
        'persontype_id',
        'person_id',
    ];
}
