<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    //$fillable: evitamos asignacion masiva
    use HasFactory;
    protected $fillable = {
    	'nombre',
    	'descripcion',
    };
}
