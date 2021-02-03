<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminInsert extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 'email', 'password', 'proimage', 'active_status', 'block_status'
    ];
}
