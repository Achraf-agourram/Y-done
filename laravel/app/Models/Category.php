<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'categoryTitle'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
