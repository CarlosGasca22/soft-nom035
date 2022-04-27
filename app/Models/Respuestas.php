<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;
        protected $table = 'respuestas';

        protected $fillable = ['id_usuario', 'id_pregunta',  'respuesta', 'status'];

          public function usuarios()
         {
           return $this->belongsTo('App\Models\Usuarios', 'id_usuario', 'id');
  
         }
            public function preguntas()
         {
           return $this->belongsTo('App\Models\Preguntas', 'id_pregunta', 'id');
  
         }
}
