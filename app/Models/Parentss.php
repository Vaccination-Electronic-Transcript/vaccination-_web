<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentss extends Model
{
    use HasFactory;
    protected $table='parentss';
    protected $primarykey='ssn';
    protected $fillable = [
        'SSN',
        'Firstname',
        'Lastname',
        'phone',
    ];
}
