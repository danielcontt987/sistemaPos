<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'telephone',
        'image',
        'email',
        'curp',
        'rfc',
        'int',
        'ext',
        'status',
        'type_user',
        'colony_id',
        'business_id',
        'user_id',
    ];
}
