<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{

    protected $table = 'articulo';
    protected $primaryKey = 'Id_Articulo';   // clave primaria
    public $timestamps = false;     // si tu tabla no usa created_at/updated_at

    protected $fillable = ['Nombre', 'Descripcion', 'CantInventario', 'Precio'];
}
