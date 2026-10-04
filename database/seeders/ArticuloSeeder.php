<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $data = [
        ['Nombre' => 'Laptop HP', 'Descripcion' => 'Laptop 15" Core i5', 'CantInventario' => 20, 'Precio' => 650.00],
        ['Nombre' => 'Mouse Logitech', 'Descripcion' => 'Mouse inalámbrico', 'CantInventario' => 50, 'Precio' => 25.00],
        ['Nombre' => 'Teclado Redragon', 'Descripcion' => 'Teclado mecánico RGB', 'CantInventario' => 30, 'Precio' => 45.00],
        ['Nombre' => 'Monitor Samsung', 'Descripcion' => 'Monitor 24" LED', 'CantInventario' => 15, 'Precio' => 180.00],
        ['Nombre' => 'Impresora Epson', 'Descripcion' => 'Multifuncional Wi-Fi', 'CantInventario' => 10, 'Precio' => 120.00],
        ['Nombre' => 'USB Kingston', 'Descripcion' => 'Memoria 64GB', 'CantInventario' => 100, 'Precio' => 12.00],
        ['Nombre' => 'Disco SSD', 'Descripcion' => 'SSD 500GB Crucial', 'CantInventario' => 25, 'Precio' => 75.00],
        ['Nombre' => 'Audífonos Sony', 'Descripcion' => 'Bluetooth con micrófono', 'CantInventario' => 40, 'Precio' => 55.00],
        ['Nombre' => 'Router TP-Link', 'Descripcion' => 'Router Wi-Fi 5', 'CantInventario' => 18, 'Precio' => 60.00],
        ['Nombre' => 'Cámara Logitech', 'Descripcion' => 'Webcam HD 1080p', 'CantInventario' => 22, 'Precio' => 85.00],
        ['Nombre' => 'Tablet Lenovo', 'Descripcion' => 'Pantalla 10" Android', 'CantInventario' => 12, 'Precio' => 210.00],
        ['Nombre' => 'Smartwatch Xiaomi', 'Descripcion' => 'Reloj inteligente Mi Band', 'CantInventario' => 35, 'Precio' => 40.00],
    ];

    DB::table('articulo')->insert($data);
}

}
