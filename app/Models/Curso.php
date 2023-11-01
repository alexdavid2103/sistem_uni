<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];

    public function programa()
    {
        return $this->belongsTo(Programa::class, 'id_programa', 'id');
    }
}
