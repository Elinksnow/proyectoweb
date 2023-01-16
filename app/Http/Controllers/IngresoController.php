<?php

namespace App\Http\Controllers;

use App\Models\ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    public function index()
    {
        $ingresos = Ingreso::all();
        return response()->json($ingresos, status:201);
    }

    
    public function create()
    {
        return response()->json(status:201);
    }

    
    public function store(IngresoRequest $request)
    {
        $ingreso = new Ingreso();
        $ingreso->ingr_centro_dist = $request->input('ingr_centro_dist');
        $ingreso->ingr_fecha = $request->input('ingr_fecha');
        $ingreso->save();

        return response()->json($ingreso, status:201);
    }

    
    public function show($id)
    {
        $ingreso = Ingreso::findOrFail($id);
        return response()->json($ingreso, status:201);
    }

    
    public function edit($id)
    {
        $ingreso = Ingreso::findOrFail($id);
        return response()->json($ingreso, status:201);
    }

    
    public function update(IngresoRequest $request, $id)
    {
        $ingreso = Ingreso::findOrFail($id);
        $ingreso->ingr_centro_dist = $request->input('ingr_centro_dist');
        $ingreso->ingr_fecha = $request->input('ingr_fecha');
        $ingreso->save();

        return response()->json($ingreso, status:201);
    }

    
    public function destroy($id)
    {
        $ingreso = Ingreso::findOrFail($id);
        $ingreso->delete();

        return response()->json($ingreso, status:201);
    }
}
