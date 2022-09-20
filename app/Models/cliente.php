<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'cliente';
    protected $fillable = [
        'Primer_nombre',
        'Segundo_nombre',
        'Primer_apellido',
        'Segundo_apellido',
        'Direccion',
        'Telefono',
    ];

}
