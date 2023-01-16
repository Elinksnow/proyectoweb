<?php

namespace App\Http\Controllers;

use App\Models\detalle_egreso;

use App\Http\Requests\Detalle_egresoRequest;

class DetalleEgresoController extends Controller
{
   
    public function index()
    {
        $detalle_egresos = Detalle_egreso::all();
        return response()->json($detalle_egresos, status:201);
    }

    
    public function create()
    {
        return response()->json(status:201);
    }

    
    public function store(Detalle_egresoRequest $request)
    {
        $detalle_egreso = new Detalle_egreso();
        $detalle_egreso->cd_codigo = $request->input('det_egre_cantidad');
        $detalle_egreso->cd_direccion = $request->input('det_egre_lote');
        $detalle_egreso->save();

        return response()->json($detalle_egreso, status:201);
    }

    
    public function show($id)
    {
        $detalle_egreso = Detalle_egreso::findOrFail($id);
        return response()->json($detalle_egreso, status:201);
    }

    
    public function edit($id)
    {
        $detalle_egreso = Detalle_egreso::findOrFail($id);
        return response()->json($detalle_egreso, status:201);
    }

    
    public function update(Detalle_egresoRequest $request, $id)
    {
        $detalle_egreso = Detalle_egreso::findOrFail($id);
        $detalle_egreso->cd_codigo = $request->input('det_egre_cantidad');
        $detalle_egreso->cd_direccion = $request->input('det_egre_lote');
        $detalle_egreso->save();

        return response()->json($detalle_egreso, status:201);
    }

    
    public function destroy($id)
    {
        $detalle_egreso = Detalle_egreso::findOrFail($id);
        $detalle_egreso->delete();

        return response()->json($detalle_egreso, status:201);
    }
}
