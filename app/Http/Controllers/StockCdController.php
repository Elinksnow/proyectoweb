<?php

namespace App\Http\Controllers;

use App\Models\stock_cd;
use Illuminate\Http\Request;
use App\Http\Requests\stock_cdRequest;

class StockCdController extends Controller
{
    public function index()
    {
        $stockcds = StockCd::all();
        return response()->json($stockcds, status:201);
    }

    
    public function create()
    {
        return response()->json(status:201);
    }

    
    public function store(StockCdRequest $request)
    {
        $stockcd = new StockCd();
        $stockcd->scd_id_medicamento = $request->input('scd_id_medicamento');
        $stockcd->scd_centro_distribucion = $request->input('scd_centro_distribucion');
        $stockcd->scd_cantidad = $request->input('scd_cantidad');
        $stockcd->scd_lote = $request->input('scd_lote');
        $stockcd->save();

        return response()->json($stockcd, status:201);
    }

    
    public function show($id)
    {
        $stockcd = StockCd::findOrFail($id);
        return response()->json($stockcd, status:201);
    }

    
    public function edit($id)
    {
        $stockcd = StockCd::findOrFail($id);
        return response()->json($stockcd, status:201);
    }

    
    public function update(StockCdRequest $request, $id)
    {
        $stockcd = StockCd::findOrFail($id);
        $stockcd->scd_id_medicamento = $request->input('scd_id_medicamento');
        $stockcd->scd_centro_distribucion = $request->input('scd_centro_distribucion');
        $stockcd->scd_cantidad = $request->input('scd_cantidad');
        $stockcd->scd_lote = $request->input('scd_lote');
        $stockcd->save();

        return response()->json($stockcd, status:201);
    }

    
    public function destroy($id)
    {
        $stockcd = StockCd::findOrFail($id);
        $stockcd->delete();

        return response()->json($stockcd, status:201);
    }
}
