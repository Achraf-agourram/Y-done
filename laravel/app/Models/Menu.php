<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function restaurant()
    {
        return $this->belongsTo(Restaurent::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
