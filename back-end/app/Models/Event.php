<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'post_date', 'event_type',
        'display_image', 'created_by', 'created_date', 'modified_date',
    ];

    protected $casts = [
        'post_date' => 'datetime',
        'created_date' => 'datetime',
        'modified_date' => 'datetime',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
