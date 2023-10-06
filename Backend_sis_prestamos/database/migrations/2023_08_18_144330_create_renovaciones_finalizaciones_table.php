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
        Schema::create('Renovaciones_Finalizaciones', function (Blueprint $table) {
            $table->id('Renovaciones_id');
            $table->unsignedBigInteger('contrato_id');
            $table->decimal('monto_devuelto', 10, 2);
            $table->string('tipo');
            $table->date('fecha_devolucion');
            $table->timestamps();

            $table->foreign('contrato_id')->references('contrato_id')->on('contratos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devoluciones');
    }
};
