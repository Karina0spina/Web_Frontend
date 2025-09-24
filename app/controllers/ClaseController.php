<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clase;

class ClaseController extends Controller
{
    public function guardar(Request $request)
    {
        $clase = new Clase;
        $clase->nombre = $request->nombre;
        $clase->save();

        return response()->json([
            'status' => 200,
            'msj' => 'Clase almacenada exitosamente'
        ]);
    }

    public function eliminar(Request $request)
    {
        $clase = Clase::find($request->id);
        if (!$clase) {
            return response()->json([
                'mensaje' => 'Clase no encontrada'
            ]);
        }
        $clase->delete();
        return response()->json([
            'mensaje' => 'Clase eliminada exitosamente'
        ]);
    }

    public function listar()
    {
        $clases = Clase::all();
        return response()->json([
            'mensaje' => 'Listado de clases exitoso',
            'data' => $clases
        ]);
    }
}