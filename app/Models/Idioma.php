<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    //tabla con la cual el modelo se relaciona dentro de la clase
    protected $table = "languages";
    //calve primaria de la tabla
    protected $primaryKey = "language_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion M:M paises(Country)
    public function paises(){
        //belongsToMany: Parametros
        //1 El modelo a relacionar
        //2 la tabla pivot (tabla debil)
        //3 la fk del modelo actual en el pivot
        //4 la fk del modelo a relacionar en el pivot
        return $this->belongsToMany(Country::class, 
                                    'country_languages',
                                    'language_id',
                                    'country_id')->withPivot('official');
    }
    
}
