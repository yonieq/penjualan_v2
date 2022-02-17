<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;

    protected $filable = [
        'atas_nama', 'bank', 'no_rekening', 'image'
    ];
}
