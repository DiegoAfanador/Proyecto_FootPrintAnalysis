<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabulacion extends Model
{
    protected $fillable=[

    //Atributos de huella plantar derecha(Pd=Pie derecho)
    'codigoTab',
    'fechaRegistroTab',
    'noDocumentoApdz',
    'codigoAna',
    'faltaImpresionPdTab',
    'continuidadImpresionPdTab',
    'medidaFundamentalPdTab',
    'resultadoXPdTab',
    'resultadoYPdTab',
    'resultadoAyPdTab',
    'resultadoTaPdTab',
    'resultadoLongitudPdTab',
    'resultado%xPdTab',
    'tipoPdTab',

    //Atributos de huella plantar izquierda(Pi=Pie izquierdo)
    'faltaImpresionPiTab',
    'continuidadImpresionPiTab',
    'medidaFundamentalPiTab',
    'resultadoXPiTab',
    'resultadoYPiTab',
    'resultadoAyPiTab',
    'resultadoTaPiTab',
    'resultadoLongitudPiTab',
    'resultado%xPiTab',
    'tipoPiTab'
    ];
}
