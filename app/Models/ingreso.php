<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingreso extends Model
{
    use HasFactory;
    protected $fillable = ['ingr_fecha','ingr_centro_dist'];
}
