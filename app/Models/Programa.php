<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }
}
