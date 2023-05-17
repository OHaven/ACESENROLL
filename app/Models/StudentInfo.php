<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'gender',
        'civilstatus',
        'contactno',
        'status',
    ];
}
