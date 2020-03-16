<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventosController extends Controller
{
	/**
	 *
	 */
	private static function format_date($date)
	{
		list($year, $month, $day, $hours, $minutes, $seconds) = sscanf($date, "%d-%d-%d %d:%d:%d");
		return sprintf("%04d-%02d-%02dT%02d:%02d", $year, $month, $day, $hours, $minutes);
	}
	
	/**
	 *
	 */
	private function validate_error($data)
	{
		$validator = Validator::make(
    		$data,
    		['nombre_evento' => 'required|max:100',
    		 'descripcion' => 'max:1024',
			 'fecha_inicio' => 'required|date|before:fecha_fin',
			 'fecha_fin' => 'required|date|after:fecha_inicio',
			 'nivel_evento' => 'required|in:primaria,secundaria,primaria y secundaria,media superior,superior,general',
			 'tipo_evento' => 'required|in:concurso,concurso clasificatorio,concurso de practica,sesion,curso',
    		],
    		['nombre_evento.required' => 'Porfavor ingresa el nombre del evento',
			 'nombre_evento.max' => 'Longitud del nombre excedida',
			 'fecha_inicio.required' => 'Fecha de inicio requerida',
			 'fecha_inicio.date' => 'Formato de fecha no válido',
			 'fecha_inicio.before' => 'La fecha de inicio debe ser antes que la fecha de fin',
			 'fecha_fin.required' => 'Fecha de fin requerida',
			 'fecha_fin.date' => 'Formato de fecha no válido',
			 'fecha_fin.after' => 'La fecha de fin debe ser después que la fecha de inicio',
			 'nivel_evento.required' => 'Nivel del evento requerido',
			 'nivel_evento.in' => 'Nivel del evento no válido',
			 'descripcion.max' => 'Longitud de la descripción excedida',
			 'tipo_evento.required' => 'Tipo de evento requerido',
			 'tipo_evento.in' => 'Tipo de evento no válido',
    		]
    	);
    	if ($validator->fails())
    		return $validator;
   		return False;
	}
	
	/**
     * Store a created resource in storage.
     */
    private function store(Request $request, Evento $evento)
    {
        $evento -> nombre_evento = $request -> nombre_evento;
        $evento -> descripcion = $request -> descripcion_evento;
        $evento -> fecha_inicio = $request -> fecha_inicio;
        $evento -> fecha_fin = $request -> fecha_fin;
        $evento -> nivel = strtolower($request -> nivel_evento); 
        $evento -> tipo_evento = strtolower($request -> tipo_evento); 
        $evento -> lugar = $request -> lugar_evento;
        $evento -> save();
    }
	
    /**
     *
     */
    public function create(Request $request)
    {	
    	$validator = self::validate_error($request -> all());
		if ($validator) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $evento = new Evento();
        self::store($request, $evento);
        return redirect('ver_eventos_admin');
    }
    
    /**
     *
     */
    public function update(Request $request)
    {
    	$validator = self::validate_error($request -> all());
		if ($validator) {
			return redirect()->back()
				->withErrors($validator)
				->withInput();
		}
		$evento = Evento::find($request -> id);
		self::store($request, $evento);
        return redirect('ver_eventos_admin'); 
    }
    
    /**
     * Show all events
     *
     * @return view admin/pages/ver_eventos
     */
    public function show_all()
    {
	    $eventos = Evento::all();
	    return view('admin.pages.ver_eventos',[
			'eventos'=>$eventos,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id_evento)
    {
        $evento = Evento::find($id_evento);
		$evento -> fecha_fin = self :: format_date($evento -> fecha_fin);
		$evento -> fecha_inicio = self :: format_date($evento -> fecha_inicio);
        return view('admin.pages.editar_evento', [
        	'evento' => $evento,
        ]);
    }
    
    /**
     *
     */
    public function delete(Request $request)
    {
    	$evento = Evento::find($request -> id);
    	$evento -> delete();
    	return redirect('ver_eventos_admin');
    }
}
