<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_ingreso extends Model
{
    use HasFactory;
    protected $fillable = ['id_medicamento','det_ing_cantidad','det_ing_lote','det_ingeso_id'];
}
