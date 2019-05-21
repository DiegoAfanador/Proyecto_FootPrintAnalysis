<?php

namespace App\Http\Controllers;

use App\Analisi;
use Illuminate\Http\Request;

class AnalisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analisis = analisi::latest()->paginate(5);

        return view('analisis.index', compact('analisis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('analisis.create');
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
            'fechaHoraAna'=>'required',
            'noDocumentoApdz'=>'required',

            // Atributos de huella plantar derecha(Pd=Pie derecho)
            'coor1PdAna'=>'nullable',
            'coor11PdAna'=>'nullable',
            'coor2PdAna'=>'nullable',
            'coor22PdAna'=>'nullable',
            'coor3PdAna'=>'nullable',
            'coor4PdAna'=>'nullable',
            'coor5PdAna'=>'nullable',
            'coor6PdAna'=>'nullable',
            'coor7PdAna'=>'nullable',
            'coor8PdAna'=>'nullable',
            'calculo1PdAna'=>'nullable',
            'calculo2PdAna'=>'nullable',
            'calculo3PdAna'=>'nullable',
            'calculo4PdAna'=>'nullable',
            'calculo5PdAna'=>'nullable',
            'huellaPdAna'=>'nullable',

            // Atributos de huella plantar izquierda(Pi=Pie izquierdo)
            'coor1PiAna'=>'nullable',
            'coor11PiAna'=>'nullable',
            'coor2PiAna'=>'nullable',
            'coor22PiAna'=>'nullable',
            'coor3PiAna'=>'nullable',
            'coor4PiAna'=>'nullable',
            'coor5PiAna'=>'nullable',
            'coor6PiAna'=>'nullable',
            'coor7PiAna'=>'nullable',
            'coor8PiAna'=>'nullable',
            'calculo1PiAna'=>'nullable',
            'calculo2PiAna'=>'nullable',
            'calculo3PiAna'=>'nullable',
            'calculo4PiAna'=>'nullable',
            'calculo5PiAna'=>'nullable',
            'huellaPiAna'=>'nullable',
            
        ]);

        analisi::create($request->all());

        return redirect()->route('analisis.index')->with('message','Análisis Hecho');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\analisi  $analisi
     * @return \Illuminate\Http\Response
     */
    public function show(analisi $analisi)
    {
        return view('analisis.show', compact('analisi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\analisi  $analisi
     * @return \Illuminate\Http\Response
     */
    public function edit(analisi $analisi)
    {
        return view('analisis.edit', compact('analisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\analisi  $analisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, analisi $analisi)
    {

        // $analisi = analisi::findOrFail($noDocumentoApdz);

       $analisi->huellaAna = $request->file('huellaAna')->store('public');

        // dd($request->file('huellaAna')->store('public'));

        $request->validate([
            'fechaHoraAna'=>'required',
            'noDocumentoApdz'=>'required',

            // Atributos de huella plantar derecha(Pd=Pie derecho)
            'coor1PdAna'=>'nullable',
            'coor11PdAna'=>'nullable',
            'coor2PdAna'=>'nullable',
            'coor22PdAna'=>'nullable',
            'coor3PdAna'=>'nullable',
            'coor4PdAna'=>'nullable',
            'coor5PdAna'=>'nullable',
            'coor6PdAna'=>'nullable',
            'coor7PdAna'=>'nullable',
            'coor8PdAna'=>'nullable',
            'calculo1PdAna'=>'nullable',
            'calculo2PdAna'=>'nullable',
            'calculo3PdAna'=>'nullable',
            'calculo4PdAna'=>'nullable',
            'calculo5PdAna'=>'nullable',
            'huellaPdAna'=>'nullable',

            // Atributos de huella plantar izquierda(Pi=Pie izquierdo)
            'coor1PiAna'=>'nullable',
            'coor11PiAna'=>'nullable',
            'coor2PiAna'=>'nullable',
            'coor22PiAna'=>'nullable',
            'coor3PiAna'=>'nullable',
            'coor4PiAna'=>'nullable',
            'coor5PiAna'=>'nullable',
            'coor6PiAna'=>'nullable',
            'coor7PiAna'=>'nullable',
            'coor8PiAna'=>'nullable',
            'calculo1PiAna'=>'nullable',
            'calculo2PiAna'=>'nullable',
            'calculo3PiAna'=>'nullable',
            'calculo4PiAna'=>'nullable',
            'calculo5PiAna'=>'nullable',
            'huellaPiAna'=>'nullable',

        ]);

        $analisi->update($request->all());

        return redirect()->route('analisis.index')->with('message','Análisis Actualizado');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\analisi  $analisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(analisi $analisi)
    {
        $analisi->delete();

        return redirect()->route('analisis.index')->with('message','Análisis Eliminado');
    }
}
