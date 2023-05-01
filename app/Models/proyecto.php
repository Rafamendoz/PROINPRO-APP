<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public $timestamps = true;
    protected $fillable = ['id', 'nombre_proyecto','descripcion','estado'];
}
