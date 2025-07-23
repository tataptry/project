<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Izinkan mass assignment untuk field berikut
    protected $fillable = ['name', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
