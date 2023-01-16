<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_egreso extends Model
{
    use HasFactory;
    protected $fillable = ['id_medicamento','det_egr_cantidad','det_egr_lote','det_egreso_id'];
}
