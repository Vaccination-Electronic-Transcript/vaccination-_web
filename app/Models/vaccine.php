<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccine extends Model
{
    use HasFactory;
    protected $table = 'vaccines';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'name',
        'dose',
        'age',
        'type',
        'quantity'
    ];
    public function followUps()
    {
        return $this->hasMany(FollowUp::class);
    }

}
