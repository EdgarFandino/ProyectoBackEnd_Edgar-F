<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fullstack extends Model
{
    use HasFactory;

    protected $table = "Fullstacks";
    protected $primaryKey = "id";
    protected $fillable = ["Nombre","Identificacion","Correo","Telefono","Empresa","Mensaje"];

    
}
