<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'telefono', 'correo', 'direccion'];

    public function docentes()
    {
        return $this->belongsToMany(Docente::class, 'estudiante_docente', 'estudiante_id', 'docente_id');
    }
}
