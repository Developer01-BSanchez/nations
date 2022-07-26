<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //tabla con la cual el modelo se relaciona dentro de la clase
    protected $table = "continents";
    //calve primaria de la tabla
    protected $primaryKey = "continent_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion entre continente y región
    public function regiones(){
        return $this->hasMany( Region::class , 'continent_id');
    }
}
