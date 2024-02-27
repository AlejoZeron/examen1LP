<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    protected $table = 'vuelos';
    protected $primaryKey = 'numeroVuelo';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['numeroVuelo', 'origen', 'destino', 'numeroAsientos', 'fecha_salida'];
}

