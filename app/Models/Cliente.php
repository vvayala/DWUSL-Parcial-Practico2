<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'Id_Cliente';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Apellido',
        'Fecha_Nac'
    ];
}
