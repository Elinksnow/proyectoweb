<?php

namespace App\Http\Controllers;

use App\Models\centro_distribucion;
use App\Http\Requests\centro_distribucionRequest;

class CentroDistribucionController extends Controller
{
   
    public function index()
    {
        $centro_distribucions = Centro_distribucion::all();
        return response()->json($centro_distribucions, status:201);
    }

    
    public function create()
    {
        return response()->json(status:201);
    }

    
    public function store(Centro_distribucionRequest $request)
    {
        $centro_distribucion = new Centro_distribucion();
        $centro_distribucion->cd_codigo = $request->input('cd_codigo');
        $centro_distribucion->cd_direccion = $request->input('cd_direccion');
        $centro_distribucion->cd_telefono = $request->input('cd_telefono');
        $centro_distribucion->save();

        return response()->json($centro_distribucion, status:201);
    }

    
    public function show($id)
    {
        $centro_distribucion = Centro_distribucion::findOrFail($id);
        return response()->json($centro_distribucion, status:201);
    }

    
    public function edit($id)
    {
        $centro_distribucion = Centro_distribucion::findOrFail($id);
        return response()->json($centro_distribucion, status:201);
    }

    
    public function update(Centro_distribucionRequest $request, $id)
    {
        $centro_distribucion = Centro_distribucion::findOrFail($id);
        $centro_distribucion->cd_codigo = $request->input('cd_codigo');
        $centro_distribucion->cd_direccion = $request->input('cd_direccion');
        $centro_distribucion->cd_telefono = $request->input('cd_telefono');
        $centro_distribucion->save();

        return response()->json($centro_distribucion, status:201);
    }

    
    public function destroy($id)
    {
        $centro_distribucion = Centro_distribucion::findOrFail($id);
        $centro_distribucion->delete();

        return response()->json($centro_distribucion, status:201);
    }
}
