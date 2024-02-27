<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAsiento extends Model
{
    protected $table = 'tipos_asientos';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nombre', 'descripcion']; 

}

