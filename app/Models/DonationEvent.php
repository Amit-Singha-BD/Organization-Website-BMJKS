<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DonationEvent extends Model
{
    use HasFactory;
    protected $table = 'donation_event_name';

    protected $fillable = [
        'event_name',
        'description',
        'status'
    ];
}
