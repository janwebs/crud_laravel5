<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "personas";
    protected $fillable = ['nombre','direccion', 'sexo', 'fecha_nacimiento'];

    public function scopeSearch($query, $nombre)
    {
    	return $query->where('nombre', 'LIKE', "%$nombre%");
    }

}