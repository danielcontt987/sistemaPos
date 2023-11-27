<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'folio',
        'name',
        'description',
        'measurement',
        'price_shop',
        'price_sale',
        'barcode',
        'imagen',
        'category_id',
        'user_id',
        'business_id',
    ];
}
