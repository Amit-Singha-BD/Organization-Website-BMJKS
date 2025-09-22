<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationEvent extends Model
{
    protected $fillable = [
        'event_name',
        'description',
        'total_amount',
        'total_donator'
    ];
}
