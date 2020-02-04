<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $mensajeError = [
            'required' => 'Porfavor ingresa todos los datos de la publicacion',
            'max' => 'Sobrepasaste la longitud máxima'
        ];
        $validator = Validator::make($request->all(), [
            'nombre_evento' => 'required|max:100',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'nivel_evento' => 'required',
            'tipo_evento' => 'required',
            'lugar_evento' => 'required'
        ],$mensajeError);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $evento = new Evento();
        $evento->nombre_evento = $request->nombre_evento;
        $evento->descripcion = $request->descripcion_evento;
        $evento->fecha_inicio = $request->fecha_inicio;
        $evento->fecha_fin = $request->fecha_fin;
        $evento->nivel = strtolower($request->nivel_evento); 
        $evento->tipo_evento = strtolower($request->tipo_evento); 
        $evento->lugar = $request->lugar_evento;
        $evento->save();
        //return redirect('/');
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(Eventos $eventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventos $eventos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventos $eventos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventos $eventos)
    {
        //
    }
}
