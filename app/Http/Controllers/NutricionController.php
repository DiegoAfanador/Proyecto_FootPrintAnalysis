<?php

namespace App\Http\Controllers;

use App\Nutricion;
use Illuminate\Http\Request;

class NutricionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $nutricions = nutricion::paginate(3);

        return view('nutricions.index', compact('nutricions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nutricions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'comidaN' => 'required',
            'frutaN' => 'required',
            'verduraN' => 'required',
            'proteinaN' => 'required',
            'aguaN' => 'required',
            '1litroN' => 'nullable',
            '2litroN' => 'nullable',
            '3litroN' => 'nullable',
            '4litroN' => 'nullable',
            '5litroN' => 'nullable',
            'restriccionN' => 'required',
            '1resN' => 'nullable',
            '2resN' => 'nullable',
            '3resN' => 'nullable',
            '4resN' => 'nullable',
            '5resN' => 'nullable',
            
    ]);


         nutricion::create($request->all());

         return redirect()->route('nutricions.index')->with('message','Creado');
      }
    /**
     * Display the specified resource.
     *
     * @param  \App\nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function show(nutricion $nutricion)
    {
        //
        return view('nutricions.show',compact('nutricion'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function edit(nutricion $nutricion)
    {
        //
        return view('nutricions.edit',compact('nutricion'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nutricion $nutricion)
    {
        //
        $request->validate([
            'comidaN' => 'required',
            'frutaN' => 'required',
            'verduraN' => 'required',
            'proteinaN' => 'required',
            'aguaN' => 'required',
            '1litroN' => 'nullable',
            '2litroN' => 'nullable',
            '3litroN' => 'nullable',
            '4litroN' => 'nullable',
            '5litroN' => 'nullable',
            'restriccionN' => 'required',
            '1resN' => 'nullable',
            '2resN' => 'nullable',
            '3resN' => 'nullable',
            '4resN' => 'nullable',
            '5resN' => 'nullable',
    ]);
        $nutricion->update($request->all());

        return redirect()->route('nutricions.index')->with('message',' Actualizado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function destroy(nutricion $nutricion)
    {
        //
        $nutricion->delete();

        return redirect()->route('nutricions.index')->with('message',' Nutricion Eliminado Exitosamente');
    }
}
