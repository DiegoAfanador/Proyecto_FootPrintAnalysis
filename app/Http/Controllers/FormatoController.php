<?php

namespace App\Http\Controllers;

use App\Formato;
use Illuminate\Http\Request;

class FormatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* creamos una variable y le asignamos el modelo con las funciones, lo que esta dentro del paginate es el numero de registros que deseo mostrar*/
       $formatos = formato::paginate(3);
       /* retornamos la vista('nombre de la carpeta.index') y lo del compact es la variable anterior*/
       return view ('formatos.index',compact('formatos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    /* retornamos la vista ('nombre la carpeta.create') */
        return view('formatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* creamos una variable y llamamos la funcion validate y ponemos nuestros atributos que son obligatoris en caso que sean null se podran asi 'tallaM'=>'nullable' */
        $request->validate([
            'sistemadesaludM' => 'required',
            'epsM' => 'nullable',
            'arlM' => 'nullable',
            'eps1M' => 'required',
            'arl1M' => 'required',
            'sisbenM' => 'nullable',
            'coosaludM' => 'nullable',
            'tallaM' => 'required',
            'xxsM' => 'nullable',
            'xsM' => 'nullable',
            'sM' => 'nullable',
            'mM' => 'nullable',
            'lM' => 'nullable',
            'xlM' => 'nullable',
            'xxlM' => 'nullable',
            'pesoM' => 'required',
            'frecuenciacardiacaM' => 'required',
            'frecuenciarespiratoriaM' => 'required',
            'enfermedadcongénitasM' => 'nullable',
            'paperasM' => 'nullable',
            'enfermedadesdelasangreM' => 'nullable',
            'traumatismosM' => 'nullable',
            'sarampiónM' => 'nullable',
            'enfermedadesdegangliosM' => 'nullable',
            'operacionesM' => 'nullable',
            'enfermedaddigestivasM' => 'nullable',
            'enfermedadesdelavistaM' => 'nullable',
            'golpesfuertesM' => 'nullable',
            'hepatitisenfermedaddelhígadoM' => 'nullable',
            'enfermedadesglandularesM' => 'nullable',
            'lesionesarticularesM' => 'nullable',
            'enfermedadesrenalesM' => 'nullable',
            'intervencionesquirúrgicasM' => 'nullable',
            'fracturasengincesM' => 'nullable',
            'infeccionesurinariasM' => 'nullable',
            'heridasM' => 'nullable',
            'enfermedaddeloshuesosM' => 'nullable', 
            'enfermedadesdegenitalesM' => 'nullable',
            'enfermedadesdelapielM' => 'nullable',
            'enfermedadesmuscularesM' => 'nullable',
            'enfermedadesneurológicasM' => 'nullable',
            'enfermedadesauditivasM' => 'nullable',
            'fiebrereumáticaM' => 'nullable',
            'dolordeCabezamareosM' => 'nullable',
            'enfermedadescrónicasM' => 'nullable',
            'artritisartrosisM' => 'nullable',
            'convulsionesepilepsiaM' => 'nullable',
            'psoriasisM' => 'nullable',
            'enfermedadesrespiratoriasM' => 'nullable',
            'perdidadelconocimientoM' => 'nullable',
            'consumodealcoholM' => 'nullable',
            'enfermedadesarticularesM' => 'nullable',
            'deshidrataciónM' => 'nullable',
            'consumodetabacoM' => 'nullable',
            'sinusitisotitisanginasM' => 'nullable',
            'enfermedadespsiquiátricasM' => 'nullable',
            'enfTransmisiónsexualM' => 'nullable',
            'asmaM' => 'nullable',
            'diabetesM' => 'nullable',
            'transfusionesM' => 'nullable',
            'neumoníabronconeumoníaM' => 'nullable',
            'chagasM' => 'nullable',
            'hemodiálisisM' => 'nullable',
            'varicelaM' => 'nullable',
            'soplosencorazónM' => 'nullable',
            'hipertensiónarterialM' => 'nullable',
            'rubeolaM' => 'nullable',
            'enfermedadescardiacasM' => 'nullable',
            'hipoglicemiaM' => 'nullable',
            'alérgicoaalgunapicaduradeinsectoM' => 'nullable',
            'alérgicoaalgúnmedicamentoM' => 'nullable',
            'alérgicoaalgúnalimentoM' => 'nullable',
            'tomaalgunamedicaciónM' => 'nullable',
            'observacionesM' => 'nullable',
        ]);

        /* llamamos el modelo (formato) y ponemos la funcion create y adentro del ()ponemos la variable creada anteriormente y le enviamos todos los atributos */
        formato::create($request->all());
        /* redireccionamos a la vista index y con el with le agregamos un mensaje */
        return redirect()->route('formatos.index')->with('message','Aprendiz creado exitosamente');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function show(formato $formato)
    {
        /* retornamos a la vista show y dentro del compact la variable que le asignaremos en la vista index */
        return view('formatos.show',compact('formato'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function edit(formato $formato)
    {
        /* retornamos a la vista edit y dentro del compact ponemos la varibale que le asignaremos en la vista index */
        return view('formatos.edit',compact('formato'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formato $formato)
     {
        /* creamos una variable y llamamos la funcion validate y ponemos nuestros atributos que son obligatoris en caso que sean null se podran asi 'tallaM'=>'nullable' */
        $request->validate([
            'sistemadesaludM' => 'required',
            'epsM' => 'nullable',
            'arlM' => 'nullable',
            'eps1M' => 'required',
            'arl1M' => 'required',
            'sisbenM' => 'nullable',
            'coosaludM' => 'nullable',
            'tallaM' => 'required',
            'xxsM' => 'nullable',
            'xsM' => 'nullable',
            'sM' => 'nullable',
            'mM' => 'nullable',
            'lM' => 'nullable',
            'xlM' => 'nullable',
            'xxlM' => 'nullable',
            'pesoM' => 'required',
            'frecuenciacardiacaM' => 'required',
            'frecuenciarespiratoriaM' => 'required',
            'enfermedadcongénitasM' => 'nullable',
            'paperasM' => 'nullable',
            'enfermedadesdelasangreM' => 'nullable',
            'traumatismosM' => 'nullable',
            'sarampiónM' => 'nullable',
            'enfermedadesdegangliosM' => 'nullable',
            'operacionesM' => 'nullable',
            'enfermedaddigestivasM' => 'nullable',
            'enfermedadesdelavistaM' => 'nullable',
            'golpesfuertesM' => 'nullable',
            'hepatitisenfermedaddelhígadoM' => 'nullable',
            'enfermedadesglandularesM' => 'nullable',
            'lesionesarticularesM' => 'nullable',
            'enfermedadesrenalesM' => 'nullable',
            'intervencionesquirúrgicasM' => 'nullable',
            'fracturasengincesM' => 'nullable',
            'infeccionesurinariasM' => 'nullable',
            'heridasM' => 'nullable',
            'enfermedaddeloshuesosM' => 'nullable', 
            'enfermedadesdegenitalesM' => 'nullable',
            'enfermedadesdelapielM' => 'nullable',
            'enfermedadesmuscularesM' => 'nullable',
            'enfermedadesneurológicasM' => 'nullable',
            'enfermedadesauditivasM' => 'nullable',
            'fiebrereumáticaM' => 'nullable',
            'dolordeCabezamareosM' => 'nullable',
            'enfermedadescrónicasM' => 'nullable',
            'artritisartrosisM' => 'nullable',
            'convulsionesepilepsiaM' => 'nullable',
            'psoriasisM' => 'nullable',
            'enfermedadesrespiratoriasM' => 'nullable',
            'perdidadelconocimientoM' => 'nullable',
            'consumodealcoholM' => 'nullable',
            'enfermedadesarticularesM' => 'nullable',
            'deshidrataciónM' => 'nullable',
            'consumodetabacoM' => 'nullable',
            'sinusitisotitisanginasM' => 'nullable',
            'enfermedadespsiquiátricasM' => 'nullable',
            'enfTransmisiónsexualM' => 'nullable',
            'asmaM' => 'nullable',
            'diabetesM' => 'nullable',
            'transfusionesM' => 'nullable',
            'neumoníabronconeumoníaM' => 'nullable',
            'chagasM' => 'nullable',
            'hemodiálisisM' => 'nullable',
            'varicelaM' => 'nullable',
            'soplosencorazónM' => 'nullable',
            'hipertensiónarterialM' => 'nullable',
            'rubeolaM' => 'nullable',
            'enfermedadescardiacasM' => 'nullable',
            'hipoglicemiaM' => 'nullable',
            'alérgicoaalgunapicaduradeinsectoM' => 'nullable',
            'alérgicoaalgúnmedicamentoM' => 'nullable',
            'alérgicoaalgúnalimentoM' => 'nullable',
            'tomaalgunamedicaciónM' => 'nullable',
            'observacionesM' => 'nullable',

        ]);

        /* llamamos el modelo (formato) y ponemos la funcion update y adentro del ()ponemos la variable creada anteriormente y le enviamos todos los atributos */
        $formato->update($request->all());
        /* redireccionamos a la vista index y con el with le agregamos un mensaje */
        return redirect()->route('formatos.index')->with('message','Aprendiz actualizado exitosamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function destroy(formato $formato)
    {
        /* usamos la variable asignada en el index y llamamos la funcion delete() */
        $formato->delete();

        /* redireccionamos a la vista index y con el with le agregamos un mensaje */
        return redirect()->route('formatos.index')->with('message','Aprendiz eliminado');
        
    }
}
