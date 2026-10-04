<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'Id_Pedido';
    public $timestamps = false;

    protected $fillable = [
        'Fecha_Pedido',
        'Fecha_Entrega',
        'Observaciones',
        'Id_Cliente',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'Id_Cliente');
    }

    public function detalles()
{
    return $this->hasMany(DetallePedido::class, 'Id_Pedido', 'Id_Pedido');
}

}
