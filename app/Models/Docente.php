<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'telefono', 'correo', 'direccion'];

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class, 'estudiante_docente', 'docente_id', 'estudiante_id');
    }
}
