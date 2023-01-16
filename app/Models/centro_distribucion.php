<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class centro_distribucion extends Model
{
    use HasFactory;
    protected $fillable = ['cd_codigo','cd_direccion','cd_telefono'];

}
