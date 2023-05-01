<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    public $timestamps = true;
    protected $fillable = ['id', 'nombre_proyect','estado'];
}
