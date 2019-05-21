<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analisi extends Model
{
    protected $fillable=[

        //Atributos de huella plantar derecha(Pd=Pie derecho)
    	'fechaHoraAna',
    	'noDocumentoApdz',
        'coor1PdAna',
        'coor11PdAna',
        'coor2PdAna',
        'coor22PdAna',
        'coor3PdAna',
        'coor4PdAna',
        'coor5PdAna',
        'coor6PdAna',
        'coor7PdAna',
        'coor8PdAna',
        'calculo1PdAna',
        'calculo2PdAna',
        'calculo3PdAna',
        'calculo4PdAna',
        'calculo5PdAna',
        'huellaPdAna',

        //Atributos de huella plantar izquierda(Pi=Pie izquierdo)
        'coor1PiAna',
        'coor11PiAna',
        'coor2PiAna',
        'coor22PiAna',
        'coor3PiAna',
        'coor4PiAna',
        'coor5PiAna',
        'coor6PiAna',
        'coor7PiAna',
        'coor8PiAna',
        'calculo1PiAna',
        'calculo2PiAna',
        'calculo3PiAna',
        'calculo4PiAna',
        'calculo5PiAna',
        'huellaPiAna',
    ];

    protected $primaryKey = 'noDocumentoApdz';
}
