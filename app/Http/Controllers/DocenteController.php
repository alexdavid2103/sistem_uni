<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct(){
        $this->middleware('permission:ver-docente|crear-docente|editar-docente|borrar-docente')->only('index');
        $this->middleware('permission:crear-docente', ['only'=>['create','store']]);
        $this->middleware('permission:editar-docente', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-docente', ['only'=>['destroy']]);
    }
    
    public function index()
    {
        $docentes = Docente::paginate(5);
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docentes.crear');
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
        Docente::create($request->all());
        return redirect()->route('docentes.index');
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
    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente)
    {
        request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'direccion' => 'required'
        ]);
        $docente->update($request->all());
        return redirect()->route('docentes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Docente::destroy($id);
        return redirect('docentes');
    }
}
