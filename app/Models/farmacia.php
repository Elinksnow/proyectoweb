<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmacia extends Model
{
    use HasFactory;
    protected $fillable = ['farm_nombre','farm_direccion','farm_mail'];
}
