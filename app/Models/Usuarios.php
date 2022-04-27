<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
        protected $table = 'usuarios';

        protected $fillable = ['id_empresa', 'nombre',  'apellido_p','apellido_m', 'estado_civil', 'grado_estudios', 'edad', 'tipo_usuario', 'status'];

          public function empresas()
         {
           return $this->belongsTo('App\Models\Empresas', 'id_empresa', 'id');
  
         }
}
