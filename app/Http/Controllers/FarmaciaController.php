<?php

namespace App\Http\Controllers;

use App\Models\farmacia;
use Illuminate\Http\Request;
use App\Http\Requests\farmaciaRequest;

class FarmaciaController extends Controller
{
    public function index()
    {
        $farmacias = Farmacia::all();
        return response()->json($farmacias, status:201);
    }

    
    public function create()
    {
        return response()->json(status:201);
    }

    
    public function store(FarmaciaRequest $request)
    {
        $farmacia = new Farmacia();
        $farmacia->farm_nombre = $request->input('farm_nombre');
        $farmacia->farm_direccion = $request->input('farm_direccion');
        $farmacia->farm_mail = $request->input('farm_mail');
        $farmacia->save();

        return response()->json($farmacia, status:201);
    }

    
    public function show($id)
    {
        $farmacia = Farmacia::findOrFail($id);
        return response()->json($farmacia, status:201);
    }

    
    public function edit($id)
    {
        $farmacia = Farmacia::findOrFail($id);
        return response()->json($farmacia, status:201);
    }

    
    public function update(FarmaciaRequest $request, $id)
    {
        $farmacia = Farmacia::findOrFail($id);
        $farmacia->farm_nombre = $request->input('farm_nombre');
        $farmacia->farm_direccion = $request->input('farm_direccion');
        $farmacia->farm_mail = $request->input('farm_mail');
        $farmacia->save();

        return response()->json($farmacia, status:201);
    }

    
    public function destroy($id)
    {
        $farmacia = Farmacia::findOrFail($id);
        $farmacia->delete();

        return response()->json($farmacia, status:201);
    }
}
