<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $fillable = ['first_name', 'last_name', 'ssn', 'phone', 'gender', 'job_id'];

    public function jobType()
    {
        return $this->belongsTo(JobType::class, 'job_id');
    }
}
