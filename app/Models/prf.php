<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prf extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'filename',
        'file_path',
        'status',
    ];
}
