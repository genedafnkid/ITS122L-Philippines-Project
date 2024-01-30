<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'status',
        'meet_date',
        'submission_date',
        'review_date',
        'results_date',
        'modified_date',
        'applicant_id',
        'pet_id',
    ];

    protected $casts = [
        'meet_date' => 'datetime',
        'review_date' => 'datetime',
        'results_date' => 'datetime',
    ];

    public function adopter()
    {
        return $this->belongsTo(Adopter::class, 'applicant_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
