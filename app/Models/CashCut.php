<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashCut extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'current',
        'current_mount',
        'difference',
        'little_box',
        'observations',
        'folio',
        'real_cash',
        'real_card',
        'real_check',
        'real_transfer',
        'total_accumulator',
        'date_opening',
        'date_close',
        'salebox_id',
        'user_id',
        'business_id',
    ];
}
