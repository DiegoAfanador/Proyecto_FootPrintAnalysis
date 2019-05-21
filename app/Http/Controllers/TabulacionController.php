<?php

namespace App\Http\Controllers;

use App\Tabulacion;
use Illuminate\Http\Request;

class TabulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabulacions = tabulacion::latest()->paginate(5);

        return view('tabulacions.index', compact('tabulacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tabulacions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'codigoTab' => 'nullable',
            'fechaRegistroTab' => 'nullable',
            'noDocumentoApdz' => 'required',
            'codigoAna' => 'nullable',

            // Atributos de huella plantar derecha(Pd=Pie derecho)
            'faltaImpresionPdTab' => 'nullable',
            'continuidadImpresionPdTab' => 'nullable',
            'medidaFundamentalPdTab' => 'nullable',
            'resultadoXPdTab' => 'nullable',
            'resultadoYPdTab' => 'nullable',
            'resultadoAyPdTab' => 'nullable',
            'resultadoTaPdTab' => 'nullable',
            'resultadoLongitudPdTab' => 'nullable',
            'resultado%xPdTab' => 'nullable',
            'tipoPdTab' => 'nullable',

            // Atributos de huella plantar izquierdo(Pi=Pie izquierdo)
            'faltaImpresionPiTab' => 'nullable',
            'continuidadImpresionPiTab' => 'nullable',
            'medidaFundamentalPiTab' => 'nullable',
            'resultadoXPiTab' => 'nullable',
            'resultadoYPiTab' => 'nullable',
            'resultadoAyPiTab' => 'nullable',
            'resultadoTaPiTab' => 'nullable',
            'resultadoLongitudPiTab' => 'nullable',
            'resultado%xPiTab' => 'nullable',
            'tipoPiTab' => 'nullable',

        ]);

        tabulacion::create($request->all());

        return redirect()->route('tabulacions.index')->with('message','Tabulación Hecho');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tabulacion  $tabulacion
     * @return \Illuminate\Http\Response
     */
    public function show(tabulacion $tabulacion)
    {
        return view('tabulacions.show', compact('tabulacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tabulacion  $tabulacion
     * @return \Illuminate\Http\Response
     */
    public function edit(tabulacion $tabulacion)
    {
        return view('tabulacions.edit', compact('tabulacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tabulacion  $tabulacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabulacion $tabulacion)
    {
        $request->validate([

            'codigoTab' => 'nullable',
            'fechaRegistroTab' => 'nullable',
            'noDocumentoApdz' => 'required',
            'codigoAna' => 'nullable',

            // Atributos de huella plantar derecha(Pd=Pie derecho)
            'faltaImpresionPdTab' => 'nullable',
            'continuidadImpresionPdTab' => 'nullable',
            'medidaFundamentalPdTab' => 'nullable',
            'resultadoXPdTab' => 'nullable',
            'resultadoYPdTab' => 'nullable',
            'resultadoAyPdTab' => 'nullable',
            'resultadoTaPdTab' => 'nullable',
            'resultadoLongitudPdTab' => 'nullable',
            'resultado%xPdTab' => 'nullable',
            'tipoPdTab' => 'nullable',

            // Atributos de huella plantar izquierda(Pi=Pie izquierdo)
            'faltaImpresionPiTab' => 'nullable',
            'continuidadImpresionPiTab' => 'nullable',
            'medidaFundamentalPiTab' => 'nullable',
            'resultadoXPiTab' => 'nullable',
            'resultadoYPiTab' => 'nullable',
            'resultadoAyPiTab' => 'nullable',
            'resultadoTaPiTab' => 'nullable',
            'resultadoLongitudPiTab' => 'nullable',
            'resultado%xPiTab' => 'nullable',
            'tipoPiTab' => 'nullable',

        ]);

        $tabulacion->update($request->all());

        return redirect()->route('tabulacions.index')->with('message','Tabulación Actualizado');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tabulacion  $tabulacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabulacion $tabulacion)
    {
        $tabulacion->delete();

        return redirect()->route('tabulacions.index')->with('message','Análisis Eliminado');
    }
}
