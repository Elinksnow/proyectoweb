<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traspaso extends Model
{
    use HasFactory;
    protected $fillable = ['tras_cd_origen','tras_cd_destino','tras_estado'];
}
