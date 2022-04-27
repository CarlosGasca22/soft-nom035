<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;
        protected $table = 'empresas';

        protected $fillable = ['razon_social', 'direccion', 'num_trabajadores', 'status'];
}
