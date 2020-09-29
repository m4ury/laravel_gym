<?php

namespace App\Http\Controllers;

use App\alimento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAlimento;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimentos = alimento::latest()->paginate(7);

        return view('alimentos.index', compact('alimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlimento $request)
    {
        $paciente = new alimento($request->except('_token'));
        $paciente->save();

        return redirect()->route('alimentos.index')->with('success', 'Nuevo Alimento ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function show(alimento $alimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function edit(alimento $alimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alimento $alimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(alimento $alimento)
    {
        //
    }
}
