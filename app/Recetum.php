<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recetum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recetas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['n_receta', 'fecha', 'modo_uso', 'estado_receta', 'f_ini_tra', 'f_fin_tra'];
}
