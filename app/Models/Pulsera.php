<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulsera extends Model
{
    protected $fillable=['id_pulsera','total','pagado','id_usuario'];
    use HasFactory;
}
