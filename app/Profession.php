<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    //
    //public $timestamps = false; PARA QUE NO SALGA FECHA DE CREATE Y UPDATE EN BD.

    protected $fillable = ['title']; //permite la asignacion masiva (elemento o elementos que se añaden dentro de un create)

}
