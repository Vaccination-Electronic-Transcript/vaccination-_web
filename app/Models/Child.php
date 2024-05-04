<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $table = 'children';
    protected $primarykey = 'id';
    protected $fillable = [
        'childSSN',
        'first_name',
        'last_name',
        'DOB',
        'gender',
        'weight',
        'height',
        'address'
    ];
    public function followUps()
    {
        return $this->hasMany(FollowUp::class, 'child_ssn', 'childSSN');
    }

}
