<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaModel extends Model
{
    use HasFactory;
    
    //Nombre de la tabla
    protected $table = 'productos';

    //Llave primaria
    protected $primaryKey = 'codigo';

    //Campos de asignacion o campos de mi tabla
    protected $fillable = ['nombre', 'precio', 'marca'];
}
