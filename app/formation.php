<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
    //Forcer le nom de la table
    //Sinon eloquent cherche une table de même nom que le 
    //model mais au pluriel
    protected $table = "formation";
    public $timestamps = false ;
}
