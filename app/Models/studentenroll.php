<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentenroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'course',
        'schoolyear',
        'yearlevel',
        'clearance_id',
        'contactno',
        'status',
    ];


}
