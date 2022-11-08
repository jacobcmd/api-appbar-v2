<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $fillable=['id_pulsera','id_producto','cantidad','id_usuario'];
    use HasFactory;
}
