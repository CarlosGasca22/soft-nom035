<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
        protected $table = 'preguntas';

        protected $fillable = ['nombre_pregunta', 'descripcion', 'status'];
}
