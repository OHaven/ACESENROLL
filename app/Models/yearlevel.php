<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yearlevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'yearlevel',
        'course',
        'subject',
        'status',
    ];
    
 
}
