<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;

     protected $fillable = [
        'name',
        'father_husband_name',
        'mother_name',
        'photo',
        'date_of_birth',
        'gender',
        'caste',
        'marital_status',
        'mobile_number',
        'village',
        'post_office',
        'thana',
        'district',
        'profession',
        'blood_group',
    ];
}
