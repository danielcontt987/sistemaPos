<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'business';

    protected $fillable = [
        'imagen',
        'name',
        'service_description',
        'street',
        'ext',
        'int',
        'colony_id',
        'telephone1',
        'telephone2',
        'telephone3',
        'cellphone',
        'website',
        'facebook',
        'latitud',
        'longitud',
        'fiscal_rfc',
        'fiscal_name',
        'fiscal_street',
        'fiscal_ext',
        'fiscal_int',
        'fiscal_colony_id',
        'api_invoice',
        'image_fiscal',
        'fiscal_regimen',
        'cer_file',
        'key_file',
        'key_password',
        'wifi',
        'fiscal_folio_number',
        'fiscal_serie',
        'suma_iva',
        'pin',
        'last_folio',
        'boss',
        'puesto',
    ];

    public function colony() 
    {
        return $this->belongsTo(Colony::class);
    }

    public function fiscal_colony() 
    {
        return $this->belongsTo(Colony::class);
    }
}
