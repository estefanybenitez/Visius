<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolModel extends Model
{
    use HasFactory;
    //Nombre de la tabla
    protected $table = 'roles';

    //Llave primaria
    protected $primaryKey = 'id_rol';

    //Campos de asignacion o campos de mi tabla
    protected $fillable = ['nombre_rol'];

}
