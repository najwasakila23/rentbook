<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'Users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'role_id'
    ];
}
