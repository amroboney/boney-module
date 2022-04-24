<?php

namespace Modules\Boney\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'qunt', 'price'];
    
    protected static function newFactory()
    {
        return \Modules\Boney\Database\factories\ProductFactory::new();
    }
}
