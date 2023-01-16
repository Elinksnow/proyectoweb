<?php

namespace App\Http\Controllers;

use App\Models\egreso;
use Illuminate\Http\Request;
use App\Http\Requests\egresoRequest;

class EgresoController extends Controller
{
    public function index()
    {
        $egresos = Egreso::all();
        return response()->json($egresos, status:201);
    }

    
    public function create()
    {
        return response()->json(status:201);
    }

    
    public function store(egresoRequest $request)
    {
        $egreso = new Egreso();
        $egreso->egre_fecha = $request->input('egre_fecha');
        $egreso->egre_centro_dist = $request->input('egre_centro_dist');
        $egreso->save();

        return response()->json($egreso, status:201);
    }

    
    public function show($id)
    {
        $egreso = egreso::findOrFail($id);
        return response()->json($egreso, status:201);
    }

    
    public function edit($id)
    {
        $egreso = egreso::findOrFail($id);
        return response()->json($egreso, status:201);
    }

    
    public function update(egresoRequest $request, $id)
    {
        $egreso = egreso::findOrFail($id);
        $egreso->egre_fecha = $request->input('egre_fecha');
        $egreso->egre_centro_dist = $request->input('egre_centro_dist');
        $egreso->save();

        return response()->json($egreso, status:201);
    }

    
    public function destroy($id)
    {
        $egreso = egreso::findOrFail($id);
        $egreso->delete();

        return response()->json($egreso, status:201);
    }
}
