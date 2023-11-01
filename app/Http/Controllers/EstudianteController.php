<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Curso;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct(){
        $this->middleware('permission:ver-estudiante|crear-estudiante|editar-estudiante|borrar-estudiante')->only('index');
        $this->middleware('permission:crear-estudiante', ['only'=>['create','store']]);
        $this->middleware('permission:editar-estudiante', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-estudiante', ['only'=>['destroy']]);
    }

    public function index()
    {
        $estudiantes = Estudiante::paginate(5);
        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiantes.crear',  ['docente' =>Docente::all(), 'curso'=>Curso::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'direccion' => 'required',
            'id_docentes' => 'required',
            'id_cursos' => 'required',
        ]);
        $estudiantes = new Estudiante();
        $estudiantes->nombre=$request->input('nombre');
        $estudiantes->apellido=$request->input('apellido');
        $estudiantes->telefono=$request->input('telefono');
        $estudiantes->correo=$request->input('correo');
        $estudiantes->direccion=$request->input('direccion');
        $estudiantes->id_docentes=$request->input('id_docentes');
        $estudiantes->id_cursos=$request->input('id_cursos');
        $estudiantes->save();
        return redirect()->route('estudiantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        $estudiante=Estudiante::find($estudiante);
        return view('estudiantes.edit', ['estudiante'=>$estudiante, 'docentes'=>Docente::all(), 'cursos'=>Curso::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'direccion' => 'required',
            'id_profesores' => 'required',
            'id_cursos' => 'required'
        ]);
        $estudiante = Estudiante::find($estudiante);
        $estudiante->nombre=$request->input('nombre');
        $estudiante->apellido=$request->input('apellido');
        $estudiante->telefono=$request->input('telefono');
        $estudiante->correo=$request->input('correo');
        $estudiante->id_docentes=$request->input('id_docentes');
        $estudiante->id_cursos=$request->input('id_cursos');
        $estudiante->save();
        return redirect()->route('estudiantes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.index');
    }
}
