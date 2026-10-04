<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $data = [
        ['Fecha_Pedido' => '2026-09-01 10:00:00', 'Fecha_Entrega' => '2026-09-05 15:00:00', 'Observaciones' => 'Pedido número 1', 'Id_Cliente' => 1],
        ['Fecha_Pedido' => '2026-09-02 11:30:00', 'Fecha_Entrega' => '2026-09-06 14:00:00', 'Observaciones' => 'Pedido número 2', 'Id_Cliente' => 2],
        ['Fecha_Pedido' => '2026-09-03 09:45:00', 'Fecha_Entrega' => '2026-09-07 16:00:00', 'Observaciones' => 'Pedido número 3', 'Id_Cliente' => 3],
        ['Fecha_Pedido' => '2026-09-04 14:20:00', 'Fecha_Entrega' => '2026-09-08 13:00:00', 'Observaciones' => 'Pedido número 4', 'Id_Cliente' => 4],
        ['Fecha_Pedido' => '2026-09-05 08:10:00', 'Fecha_Entrega' => '2026-09-09 12:00:00', 'Observaciones' => 'Pedido número 5', 'Id_Cliente' => 5],
        ['Fecha_Pedido' => '2026-09-06 12:00:00', 'Fecha_Entrega' => '2026-09-10 17:00:00', 'Observaciones' => 'Pedido número 6', 'Id_Cliente' => 6],
        ['Fecha_Pedido' => '2026-09-07 15:30:00', 'Fecha_Entrega' => '2026-09-11 11:00:00', 'Observaciones' => 'Pedido número 7', 'Id_Cliente' => 7],
        ['Fecha_Pedido' => '2026-09-08 09:00:00', 'Fecha_Entrega' => '2026-09-12 14:30:00', 'Observaciones' => 'Pedido número 8', 'Id_Cliente' => 8],
        ['Fecha_Pedido' => '2026-09-09 13:15:00', 'Fecha_Entrega' => '2026-09-13 15:00:00', 'Observaciones' => 'Pedido número 9', 'Id_Cliente' => 9],
        ['Fecha_Pedido' => '2026-09-10 10:40:00', 'Fecha_Entrega' => '2026-09-14 16:00:00', 'Observaciones' => 'Pedido número 10', 'Id_Cliente' => 10],
        ['Fecha_Pedido' => '2026-09-11 11:00:00', 'Fecha_Entrega' => '2026-09-15 13:00:00', 'Observaciones' => 'Pedido número 11', 'Id_Cliente' => 11],
        ['Fecha_Pedido' => '2026-09-12 16:00:00', 'Fecha_Entrega' => '2026-09-16 12:00:00', 'Observaciones' => 'Pedido número 12', 'Id_Cliente' => 12],
    ];

    DB::table('pedido')->insert($data);
}

}
