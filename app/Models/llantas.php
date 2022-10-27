<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class llantas extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'Nombre',
        'Ancho_de_llanta',
        'Diametro_del_rin',
        'Presion_max',
        'Fabricante',
        'Stock',
    ];
}
