<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supdocs extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'staff',
        'filename',
    ];

    protected $table = 'supdocs';
}
