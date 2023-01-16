<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_cd extends Model
{
    use HasFactory;
    protected $fillable = ['scd_id_medicamento','scd_cantidad','scd_centro_dist','scd_lote'];

}
