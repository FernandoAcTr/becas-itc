<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';

    public function tipoBeca()
    {
        return $this->belongsTo(TipoBeca::class, 'tipo_id');
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'carrera_id');
    }
}
