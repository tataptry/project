<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{
    // Izinkan kolom ini diisi secara massal
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
