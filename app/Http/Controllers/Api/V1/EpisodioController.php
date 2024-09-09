<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Episodio;
use Illuminate\Http\Request;

class EpisodioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Episodio::all(), 200); //Me va a enseñar todos los episodios creados en la solución soft
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validación de datos
        $datosepisodio = $request->validate([
            'consecutivo' => ['required', 'integer', 'auto incremental', 'max:9999'], 
            'fecha' => ['required', 'date'],
            'titular' => ['required', 'string', 'max:200'],  
            'rol' => ['required', 'string', 'max:100'], 
            'motivo' => ['required', 'required', 'max:200'], 
            'acciones' => ['required', 'string', 'max:500'], 
            'notificaciones' => ['required', 'string', 'max:500']
        ]);

        //guardar datos 
        $episodio = Episodio::create($datosepisodio);

        //respuesta al usuario
        return response()->json([
            'success' => true,
            'message' => 'Se ha creado un nuevo episodio en el sistema',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Episodio $episodio)
    {
        return response()->json($episodio, 500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Episodio $episodio)
    {
        //validación de datos
        $datosepisodio = $request->validate([
            'consecutivo' => ['required', 'integer', 'auto incremental', 'max:9999'], 
            'fecha' => ['required', 'date'],
            'titular' => ['required', 'string', 'max:200'],  
            'rol' => ['required', 'string', 'max:100'], 
            'motivo' => ['required', 'required', 'max:200'], 
            'acciones' => ['required', 'string', 'max:500'], 
            'notificaciones' => ['required', 'string', 'max:500']
        ]);

        //actualizar datos 
        $episodio = Episodio::update($datosepisodio);

        //respuesta al usuario
        return response()->json([
            'success' => true,
            'message' => 'Se ha generado una actualización a un episodio en el sistema',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episodio $episodio)
    {
        //eliminar episodio
        $episodio->delete();

        //respuesta al usuario
        return response()->json([
            'success' => true,
            'message' => 'se ha eliminado un episodio dentro del sistema'
        ], 204);
    }
}
