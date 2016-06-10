<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asegurado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'asegurados';

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
    protected $fillable = ['nombre', 'a_paterno', 'a_materno', 'c_i', 'beneficiario_ci', 'fecha_de_nac', 'sexo', 'grado', 'fuerza', 'titular', 'tipo_de_asegurado', 'n_historial'];
}
