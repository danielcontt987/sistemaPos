<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'business';

    protected $fillable = [
        'name',
        'imagen',
        'fiscal_name',
        'reason_social',
        'telephone',
        'email',
        'fiscal_street',
        'iva',
        'bank_id',
        'colony_id',
    ];
}
