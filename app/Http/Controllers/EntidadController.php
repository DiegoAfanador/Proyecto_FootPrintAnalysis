<?php

namespace App\Http\Controllers;

use App\entidad;
use Illuminate\Http\Request;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* creamos una variable y le asignamos el modelo con las funciones, lo que esta dentro del paginate es el numero de registros que deseo mostrar*/
       $entidads = entidad::paginate(3);
       /* retornamos la vista('nombre de la carpeta.index') y lo del compact es la variable anterior*/
       return view ('entidads.index',compact('entidads')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    /* retornamos la vista ('nombre la carpeta.create') */
        return view('entidads.create');
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
            'agregarE' => 'required',
            
        ]);

        /* llamamos el modelo (entidad) y ponemos la funcion create y adentro del ()ponemos la variable creada anteriormente y le enviamos todos los atributos */
        entidad::create($request->all());
        /* redireccionamos a la vista index y con el with le agregamos un mensaje */
        return redirect()->route('entidads.index')->with('message','Entidad creada exitosamente');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function show(entidad $entidad)
    {
        /* retornamos a la vista show y dentro del compact la variable que le asignaremos en la vista index */
        return view('entidads.show',compact('entidad'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function edit(entidad $entidad)
    {
        /* retornamos a la vista edit y dentro del compact ponemos la varibale que le asignaremos en la vista index */
        return view('entidads.edit',compact('entidad'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entidad $entidad)
     {
        /* creamos una variable y llamamos la funcion validate y ponemos nuestros atributos que son obligatoris en caso que sean null se podran asi 'tallaM'=>'nullable' */
        $request->validate([
            'agregarE' => 'required',
          
        ]);

        /* llamamos el modelo (entidad) y ponemos la funcion update y adentro del ()ponemos la variable creada anteriormente y le enviamos todos los atributos */
        $entidad->update($request->all());
        /* redireccionamos a la vista index y con el with le agregamos un mensaje */
        return redirect()->route('entidads.index')->with('message','Entidad actualizada exitosamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(entidad $entidad)
    {
        /* usamos la variable asignada en el index y llamamos la funcion delete() */
        $entidad->delete();

        /* redireccionamos a la vista index y con el with le agregamos un mensaje */
        return redirect()->route('entidads.index')->with('message','Entidad eliminada');
        
    }
}
