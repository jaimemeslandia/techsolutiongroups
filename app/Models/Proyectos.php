<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected   $fillable = ['Nombre', 'Fecha_de_inicio', 'Estado', 'Responsable', 'Monto'];
    /** @use HasFactory<\Database\Factories\ProyectosFactory> */
    use HasFactory;
}
