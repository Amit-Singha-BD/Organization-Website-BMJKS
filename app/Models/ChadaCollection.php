<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChadaCollection extends Model
{
    use HasFactory;
    protected $fillable = [
        'chada_names_id',
        'committee_id',
        'amount',
        'payment_date',
        'payment_status'
    ];
}
