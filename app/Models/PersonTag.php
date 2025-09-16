<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonTag extends Model
{
    protected $table = 'person_tag';
    protected $fillable = [
        'persontype_id',
        'person_id',
    ];
}
