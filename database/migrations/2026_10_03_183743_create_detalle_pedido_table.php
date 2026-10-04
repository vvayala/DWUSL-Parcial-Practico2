<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->unsignedBigInteger("Id_Articulo");
            $table->unsignedBigInteger("Id_Pedido");
            $table->foreign('Id_Articulo')->references('Id_Articulo')->on('articulo');
            $table->foreign('Id_Pedido')->references('Id_Pedido')->on('pedido')->onDelete('cascade');
            $table->integer('Cantidad');
            $table->float('Descuento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedido');
    }
};
