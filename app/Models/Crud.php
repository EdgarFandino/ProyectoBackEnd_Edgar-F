<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    protected $table = "Cruds";
    protected $primaryKey = "id";
    protected $fillable = ["Nombres","Apellidos","TipoIdentificacion","Identificacion","Telefono","Email","Profesion","Rol"];
}
