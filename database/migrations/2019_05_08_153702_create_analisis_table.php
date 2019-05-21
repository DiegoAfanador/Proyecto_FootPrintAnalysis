<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analisis', function (Blueprint $table) {
            $table->increments('codigoAna');
            $table->string('fechaHoraAna');
            $table->string('noDocumentoApdz');

            //Atributos de huella plantar derecha(Pd=Pie derecho)
            $table->string('coor1PdAna')->nullable();
            $table->string('coor11PdAna')->nullable();
            $table->string('coor2PdAna')->nullable();
            $table->string('coor22PdAna')->nullable();
            $table->string('coor3PdAna')->nullable();
            $table->string('coor4PdAna')->nullable();
            $table->string('coor5PdAna')->nullable();
            $table->string('coor6PdAna')->nullable();
            $table->string('coor7PdAna')->nullable();
            $table->string('coor8PdAna')->nullable();
            $table->string('calculo1PdAna')->nullable();
            $table->string('calculo2PdAna')->nullable();
            $table->string('calculo3PdAna')->nullable();
            $table->string('calculo4PdAna')->nullable();
            $table->string('calculo5PdAna')->nullable();
            $table->string('huellaPdAna')->default('default.png');

            //Atributos de huella plantar izquierda(Pi=Pie izquierdo)
            $table->string('coor1PiAna')->nullable();
            $table->string('coor11PiAna')->nullable();
            $table->string('coor2PiAna')->nullable();
            $table->string('coor22PiAna')->nullable();
            $table->string('coor3PiAna')->nullable();
            $table->string('coor4PiAna')->nullable();
            $table->string('coor5PiAna')->nullable();
            $table->string('coor6PiAna')->nullable();
            $table->string('coor7PiAna')->nullable();
            $table->string('coor8PiAna')->nullable();
            $table->string('calculo1PiAna')->nullable();
            $table->string('calculo2PiAna')->nullable();
            $table->string('calculo3PiAna')->nullable();
            $table->string('calculo4PiAna')->nullable();
            $table->string('calculo5PiAna')->nullable();
            $table->string('huellaPiAna')->default('default.png');

            
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
        Schema::table('analisis', function (Blueprint $table) {

            $table->dropColumn('huellaAna');

        });
        Schema::dropIfExists('analisis');
    }
}