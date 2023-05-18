<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toapprovecash extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'student_id',
        'payable_desc',
        'fee',
        'status',
    ];

}
