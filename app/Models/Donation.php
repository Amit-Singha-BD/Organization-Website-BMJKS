<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'people_id',
        'event_id',
        'donate_amount',
        'date'
    ];
}
