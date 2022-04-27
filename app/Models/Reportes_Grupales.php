<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportes_Grupales extends Model
{
    use HasFactory;
        protected $table = 'reportes_grupales';

        protected $fillable = ['id_usuario', 'ruta', 'status'];

          public function usuarios()
         {
           return $this->belongsTo('App\Models\Usuarios', 'id_usuario', 'id');
  
         }
}
