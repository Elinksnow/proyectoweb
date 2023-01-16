<?php

namespace App\Http\Controllers;

use App\Models\detalle_ingreso;
use Illuminate\Http\Request;

class DetalleIngresoController extends Controller
{
    public function index()
    {
        $detalle_ingresos = DetalleIngreso::all();
        return response()->json($detalle_ingresos, status:201);
    }

    
    public function create()
    {
        return response()->json(status:201);
    }

    
    public function store(Detalle_ingresoRequest $request)
    {
        $detalle_ingreso = new Detalle_ingreso();
        $detalle_ingreso->det_egre_cantidad = $request->input('det_egre_cantidad');
        $detalle_ingreso->det_egre_lote = $request->input('det_egre_lote');
        $detalle_ingreso->save();

        return response()->json($detalle_ingreso, status:201);
    }

    
    public function show($id)
    {
        $detalle_ingreso = Detalle_ingreso::findOrFail($id);
        return response()->json($detalle_ingreso, status:201);
    }

    
    public function edit($id)
    {
        $detalle_ingreso = Detalle_ingreso::findOrFail($id);
        return response()->json($detalle_ingreso, status:201);
    }

    
    public function update(Detalle_ingresoRequest $request, $id)
    {
        $detalle_ingreso = Detalle_ingreso::findOrFail($id);
        $detalle_ingreso->cd_codigo = $request->input('det_egre_cantidad');
        $detalle_ingreso->cd_direccion = $request->input('det_egre_lote');
        $detalle_ingreso->save();

        return response()->json($detalle_ingreso, status:201);
    }

    
    public function destroy($id)
    {
        $detalle_ingreso = Detalle_ingreso::findOrFail($id);
        $detalle_ingreso->delete();

        return response()->json($detalle_ingreso, status:201);
    }
}
