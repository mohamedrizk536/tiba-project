<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
       'worker_name',
       	'job_title',
       'management_type',
        'enternal_phone',
        'worker_email',
        'worker_phone',
        'client_case',

    ];
}


