<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopter extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'street_address',
        'city',
        'state',
        'postal_code',
        'phone_number',
        'birth_date',
        'age',
        'occupation',
        'living_arrangement',
        'housing_type',
        'family_members',
        'children_count',
        'pet_experience',
        'current_pets',
        'previous_pets',
        'reasons_to_adopt',
        'pet_preferences',
        'display_image',
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];
}
