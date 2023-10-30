<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

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
        return view('estudiantes.crear');
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
            'direccion' => 'required'
        ]);
        Estudiante::create($request->all());
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
        return view('estudiantes.edit', compact('estudiante'));
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
            'direccion' => 'required'
        ]);
        $estudiante->update($request->all());
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
