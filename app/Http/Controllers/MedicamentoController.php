<?php

namespace App\Http\Controllers;

use App\Models\medicamento;
use Illuminate\Http\Request;
use App\Http\Requests\medicamentoRequest;

class MedicamentoController extends Controller
{
    public function index()
    {
        $medicamentos = Medicamento::all();
        return response()->json($medicamentos, status:201);
    }

    
    public function create()
    {
        return response()->json(status:201);
    }

    
    public function store(MedicamentoRequest $request)
    {
        $medicamento = new Medicamento();
        $medicamento->med_nombre = $request->input('med_nombre');
        $medicamento->med_compuesto = $request->input('med_compuesto');
        $medicamento->save();

        return response()->json($medicamento, status:201);
    }

    
    public function show($id)
    {
        $medicamento = Medicamento::findOrFail($id);
        return response()->json($medicamento, status:201);
    }

    
    public function edit($id)
    {
        $medicamento = Medicamento::findOrFail($id);
        return response()->json($medicamento, status:201);
    }

    
    public function update(MedicamentoRequest $request, $id)
    {
        $medicamento = Medicamento::findOrFail($id);
        $medicamento->med_nombre = $request->input('med_nombre');
        $medicamento->med_compuesto = $request->input('med_compuesto');
        $medicamento->save();

        return response()->json($medicamento, status:201);
    }

    
    public function destroy($id)
    {
        $medicamento = Medicamento::findOrFail($id);
        $medicamento->delete();

        return response()->json($medicamento, status:201);
    }
}
