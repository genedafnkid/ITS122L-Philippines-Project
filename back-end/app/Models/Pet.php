<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'adoption_status',
        'gender',
        'birth_date',
        'age',
        'breed',
        'color',
        'description',
        'display_image',
        'vaccine_name',
        'initial_vaccine_date',
        'booster_date',
        'expiration_vaccine_date',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'initial_vaccine_date' => 'date',
        'booster_date' => 'date',
        'expiration_vaccine_date' => 'date',
    ];

    public function adoptionApplications()
    {
        return $this->hasMany(AdoptionApplication::class, 'pet_id');
    }

}
