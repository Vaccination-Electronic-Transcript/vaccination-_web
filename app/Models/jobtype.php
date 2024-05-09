<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    use HasFactory;

    protected $table = 'job_type'; // Adjust table name if needed

    protected $fillable = [
        'job_id',
        'qualification'
    ];
}
