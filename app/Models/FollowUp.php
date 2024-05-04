<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{
    use HasFactory;
    protected $table = 'follow_Up';
    protected $primarykey = 'id';
    protected $fillable = [
        'childSSN',
        'childName',
        'height',
        'weight',
        'DOB',
        'vaccineID',
    ];
    public function child()
    {
        return $this->belongsTo(Child::class, 'child_ssn', 'childSSN');
    }

    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }

}
