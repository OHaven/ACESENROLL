<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_sub extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'student_id',
        'subject',
        'course',
        'teacher',
        'grade',
        'status',
    ];


}
