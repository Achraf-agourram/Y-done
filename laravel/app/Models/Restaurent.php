<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurent extends Model
{
    protected $fillable = [
        'restaurentName',
        'location',
        'capacity',
        'openingTime',
        'closingTime',
        'isActive',
    ];
}
