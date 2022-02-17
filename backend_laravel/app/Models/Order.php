<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $filable = [
        'invoice', 'subtotal', 'status_order_id', 'metode_pembayaran', 'qty', 'ongkir_id', 'no_pengantar', 'nama_pengantar', 'pesan' ,'user_id', 'product_id', 'ongkir_id'
    ];
}
