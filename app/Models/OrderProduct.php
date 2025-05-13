<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    function product()
    {
        return $this->belongsTo(Inventory::class, 'product_id');
    }
}
