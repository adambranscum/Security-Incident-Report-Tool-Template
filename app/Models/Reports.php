<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{

    use HasFactory;

    protected $fillable = [
        'branch',
        'date',
        'time',
        'staff',
        'header',
        'nature',
        'offender',
        'offender_age',
        'offender_phone',
        'offender_lib',
        'offender_address',
        'offender_city',
        'offender_state',
        'offender_zip',
        'description',
        'victim',
        'victim_age',
        'victim_phone',
        'victim_lib',
        'victim_address',
        'victim_city',
        'victim_state',
        'victim_zip',
        'action',
        'witness',
        'witness_two',
        'witness_three',
        'file_name',
        'file_name_nature',
        'file_name_police',
    ];

    protected $table = 'reports';

    
}
