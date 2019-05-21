<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabulacions', function (Blueprint $table) {
            $table->increments('codigoTab');
            $table->date('fechaRegistroTab')->nullable();
            $table->string('noDocumentoApdz')->nullable();
            $table->integer('codigoAna')->nullable();

            // Atributos de huella plantar derecha(Pd=Pie derecho)
            $table->string('faltaImpresionPdTab')->nullable();
            $table->string('continuidadImpresionPdTab')->nullable();
            $table->string('medidaFundamentalPdTab')->nullable();
            $table->integer('resultadoXPdTab')->nullable();
            $table->integer('resultadoYPdTab')->nullable();
            $table->integer('resultadoAyPdTab')->nullable();
            $table->integer('resultadoTaPdTab')->nullable();
            $table->integer('resultadoLongitudPdTab')->nullable();
            $table->integer('resultado%xPdTab')->nullable();
            $table->string('TipoPdTab');

             // Atributos de huella plantar izquierda(Pi=Pie izquierdo)
            $table->string('faltaImpresionPiTab')->nullable();
            $table->string('continuidadImpresionPiTab')->nullable();
            $table->string('medidaFundamentalPiTab')->nullable();
            $table->integer('resultadoXPiTab')->nullable();
            $table->integer('resultadoYPiTab')->nullable();
            $table->integer('resultadoAyPiTab')->nullable();
            $table->integer('resultadoTaPiTab')->nullable();
            $table->integer('resultadoLongitudPiTab')->nullable();
            $table->integer('resultado%xPiTab')->nullable();
            $table->string('TipoPiTab')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabulacions');
    }
}
