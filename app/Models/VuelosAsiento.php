<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VuelosAsiento extends Model
{
    protected $table = 'vuelos_asientos';
    public $timestamps = false;
    protected $fillable = ['idTipoAsiento', 'numeroVuelo', 'numeroAsiento'];
}

