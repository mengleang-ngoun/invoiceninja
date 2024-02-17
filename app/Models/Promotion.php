<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'product_id',
        'purchase_amount',
        'purchase_quantity',
        'from',
        'offer_product_id',
        'offer_quantity'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function prouduct(){
        return $this->hasOne(Product::class, 'product_id');
    }

    public function offerProuduct(){
        return $this->hasOne(Product::class, 'offer_product_id');
    }
}
