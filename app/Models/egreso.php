<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class egreso extends Model
{
    use HasFactory;
    protected $fillable = ['egre_fecha','egre_centro_dist','egre_farmacia_id'];

}
