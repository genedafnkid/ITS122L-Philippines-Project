<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone_number', 'address',
        'city', 'state', 'postal_code', 'birth_date', 'availability',
        'skills', 'interests', 'previous_experience', 'additional_info',
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];
}
