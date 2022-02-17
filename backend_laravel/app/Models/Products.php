<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $filable = [
        'name', 'description', 'price', 'stok', 'image_url', 'weigth', 'categories_id',
    ];
}
