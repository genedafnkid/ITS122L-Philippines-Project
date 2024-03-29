<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'role', 'email', 'user_name', 'first_name', 'last_name',
        'password', 'display_image', 'last_login_date',
    ];

    protected $casts = [
        'last_login_date' => 'datetime',
    ];

    public function events()
    {
        return $this->hasMany(Event::class, 'created_by');
    }
}
