<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $data = [
        ['Nombre' => 'Juan', 'Apellido' => 'Pérez', 'Fecha_Nac' => '1990-05-12'],
        ['Nombre' => 'María', 'Apellido' => 'López', 'Fecha_Nac' => '1985-03-22'],
        ['Nombre' => 'Carlos', 'Apellido' => 'Ramírez', 'Fecha_Nac' => '1992-07-10'],
        ['Nombre' => 'Ana', 'Apellido' => 'González', 'Fecha_Nac' => '1998-11-02'],
        ['Nombre' => 'Luis', 'Apellido' => 'Martínez', 'Fecha_Nac' => '1980-01-15'],
        ['Nombre' => 'Sofía', 'Apellido' => 'Hernández', 'Fecha_Nac' => '1995-09-09'],
        ['Nombre' => 'Pedro', 'Apellido' => 'Castro', 'Fecha_Nac' => '1988-12-30'],
        ['Nombre' => 'Laura', 'Apellido' => 'Vega', 'Fecha_Nac' => '1993-04-18'],
        ['Nombre' => 'Andrés', 'Apellido' => 'Morales', 'Fecha_Nac' => '1991-06-25'],
        ['Nombre' => 'Gabriela', 'Apellido' => 'Torres', 'Fecha_Nac' => '1997-08-14'],
        ['Nombre' => 'Ricardo', 'Apellido' => 'Flores', 'Fecha_Nac' => '1989-02-05'],
        ['Nombre' => 'Valeria', 'Apellido' => 'Cruz', 'Fecha_Nac' => '1994-10-21'],
    ];

    DB::table('cliente')->insert($data);
}

}
