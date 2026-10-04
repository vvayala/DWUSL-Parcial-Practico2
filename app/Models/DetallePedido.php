<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $table = 'detalle_pedido';
    //protected $primaryKey = 'Id_Detalle';
    public $timestamps = false;

    protected $fillable = [
        'Id_Articulo',
        'Id_Pedido',
        'Cantidad',
        'Descuento'
    ];

    public function articulo()
    {
        return $this->belongsTo(Articulo::class, 'Id_Articulo');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'Id_Pedido');
    }
}
