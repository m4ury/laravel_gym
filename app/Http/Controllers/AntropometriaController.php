<?php

namespace App\Http\Controllers;

use App\Antropometria;
use App\paciente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAntropometria;

class AntropometriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $antropometrias = Antropometria::with('paciente')->latest()->paginate(7);
        return view('antropometrias.index', compact('antropometrias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = paciente::all();
        return view('antropometrias.create', compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $antropometria = new Antropometria($request->except('_token'));
        $antropometria->save();
        $antropometria->porcentaje_grasa = $antropometria->porcent_grasa();
        $antropometria->peso_graso = $antropometria->peso_actual * $antropometria->porcent_grasa() / 100;
        $antropometria->peso_magro = $antropometria->peso_actual - $antropometria->peso_graso;
        $antropometria->save();

        return redirect()->route('antropometrias.index')->with('success', 'Nuevo examen ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Antropometria  $antropometria
     * @return \Illuminate\Http\Response
     */
    public function show(Antropometria $antropometria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Antropometria  $antropometria
     * @return \Illuminate\Http\Response
     */
    public function edit(Antropometria $antropometria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Antropometria  $antropometria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antropometria $antropometria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Antropometria  $antropometria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antropometria $antropometria)
    {
        //
    }
}
