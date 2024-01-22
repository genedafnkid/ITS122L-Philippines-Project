<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'role', 'email', 'user_name', 'first_name', 'last_name',
        'password', 'display_image', 'registered_date', 'last_login_date',
    ];
}
