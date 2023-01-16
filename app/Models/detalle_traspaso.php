<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_traspaso extends Model
{
    use HasFactory;
    protected $fillable = ['id_medicamento','det_tra_cantidad','det_tra_lote','det_traspaso_id'];
}
