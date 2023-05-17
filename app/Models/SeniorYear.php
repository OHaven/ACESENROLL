<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniorYear extends Model
{
    use HasFactory;

    protected $fillable = [
        'schoolyear',
        'status',
    ];

}
