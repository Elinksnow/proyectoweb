<?php

namespace App\Http\Controllers;

use App\Models\traspaso;
use Illuminate\Http\Request;
use App\Http\Requests\traspasoRequest;

class TraspasoController extends Controller
{
    public function index()
    {
        $traspasos = Traspaso::all();
        return response()->json($traspasos, status:201);
    }

    
    public function create()
    {
        return response()->json(status:201);
    }

    
    public function store(TraspasoRequest $request)
    {
        $traspaso = new Traspaso();
        $traspaso->tras_cd_origen = $request->input('tras_cd_origen');
        $traspaso->tras_cd_destino = $request->input('tras_cd_destino');
        $traspaso->tras_estado = $request->input('tras_estado');

        $traspaso->save();

        return response()->json($traspaso, status:201);
    }

    
    public function show($id)
    {
        $traspaso = Traspaso::findOrFail($id);
        return response()->json($traspaso, status:201);
    }

    
    public function edit($id)
    {
        $traspaso = Traspaso::findOrFail($id);
        return response()->json($traspaso, status:201);
    }

    
    public function update(TraspasoRequest $request, $id)
    {
        $traspaso = Traspaso::findOrFail($id);
        $traspaso->tras_cd_origen = $request->input('tras_cd_origen');
        $traspaso->tras_cd_destino = $request->input('tras_cd_destino');
        $traspaso->tras_estado = $request->input('tras_estado');
        $traspaso->save();

        return response()->json($traspaso, status:201);
    }

    
    public function destroy($id)
    {
        $traspaso = Traspaso::findOrFail($id);
        $traspaso->delete();

        return response()->json($traspaso, status:201);
    }
}
