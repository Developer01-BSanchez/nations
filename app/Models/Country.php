<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //tabla con la cual el modelo se relaciona dentro de la clase
    protected $table = "countries";
    //calve primaria de la tabla
    protected $primaryKey = "country_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion inversa M:1 paises y region
    public function region(){
        return $this->belongsTo(Region::class,'region_id');
    }
}
