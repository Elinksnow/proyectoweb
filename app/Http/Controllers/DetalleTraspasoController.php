<?php

namespace App\Http\Controllers;

use App\Models\detalle_traspaso;
use Illuminate\Http\Request;
use App\Http\Requests\detalle_traspasoRequest;

class DetalleTraspasoController extends Controller
{
    public function index()
    {
        $detalle_traspasos = DetalleTraspaso::all();
        return response()->json($detalle_traspasos, status:201);
    }

    
    public function create()
    {
        return response()->json(status:201);
    }

    
    public function store(Detalle_traspasosRequest $request)
    {
        $detalle_traspasos = new Detalle_traspasos();
        $detalle_traspasos->det_tra_cantidad = $request->input('det_tra_cantidad');
        $detalle_traspasos->det_tra_lote = $request->input('det_tra_lote');
        $detalle_traspasos->save();

        return response()->json($detalle_traspasos, status:201);
    }

    
    public function show($id)
    {
        $detalle_traspasos = Detalle_traspasos::findOrFail($id);
        return response()->json($detalle_traspasos, status:201);
    }

    
    public function edit($id)
    {
        $detalle_traspasos = Detalle_traspasos::findOrFail($id);
        return response()->json($detalle_traspasos, status:201);
    }

    
    public function update(Detalle_traspasosRequest $request, $id)
    {
        $detalle_traspasos = Detalle_traspasos::findOrFail($id);
        $detalle_traspasos->det_tra_cantidad = $request->input('det_tra_cantidad');
        $detalle_traspasos->det_tra_lote = $request->input('det_tra_lote');
        $detalle_traspasos->save();

        return response()->json($detalle_traspasos, status:201);
    }

    
    public function destroy($id)
    {
        $detalle_traspasos = Detalle_traspasos::findOrFail($id);
        $detalle_traspasos->delete();

        return response()->json($detalle_traspasos, status:201);
    }
}
