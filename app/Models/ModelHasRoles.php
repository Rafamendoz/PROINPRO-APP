<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelHasRoles extends Model
{
    public $timestamps = false;
    protected $fillable = ['role_id', 'model_id'];
}
