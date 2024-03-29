<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPromotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'promotion_id',
        'invoice_id',
        'line_item',
        'quantity'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
