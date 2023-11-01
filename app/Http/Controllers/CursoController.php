<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\programa;

class CursoController extends Controller
{
    function __construct(){
        $this->middleware('permission:ver-curso|crear-curso|editar-curso|borrar-curso')->only('index');
        $this->middleware('permission:crear-curso', ['only'=>['create','store']]);
        $this->middleware('permission:editar-curso', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-curso', ['only'=>['destroy']]);
    }

    public function index()
    {
        $cursos = Curso::paginate(5);
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.crear', ['programas' =>Programa::all()]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'id_programa' => 'required',
        ]);
        $curso = new Curso();
        $curso->nombre=$request->input('nombre');
        $curso->descripcion=$request->input('descripcion');
        $curso->id_programa=$request->input('id_programa');
        $curso->save();
        return redirect()->route('cursos.index');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        $curso=Curso::find($curso);
        return view('cursos.edit', ['curso'=>$curso, 'programas'=>Programa::all()]);
    }

    public function update(Request $request, Curso $curso)
    {
        request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'id_programa' => 'required',
        ]);
        $curso = new Curso();
        $curso->nombre=$request->input('nombre');
        $curso->descripcion=$request->input('descripcion');
        $curso->id_programa=$request->input('id_programa');
        $curso->save();
        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Curso::destroy($id);
        return redirect('cursos');
    }
}
