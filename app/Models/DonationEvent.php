<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationEvent extends Model
{
    protected $table = 'donation_event_name';

    protected $fillable = [
        'event_name',
        'description',
        'status'
    ];
}
