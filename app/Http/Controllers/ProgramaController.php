<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct(){
        $this->middleware('permission:ver-programa|crear-programa|editar-programa|borrar-programa')->only('index');
        $this->middleware('permission:crear-programa', ['only'=>['create','store']]);
        $this->middleware('permission:editar-programa', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-programa', ['only'=>['destroy']]);
    }

    public function index()
    {
        $programas = Programa::paginate(5);
        return view('programas.index', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('programas.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
        Programa::create($request->all());
        return redirect()->route('programas.index');
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
    public function edit(Programa $programa)
    {
        return view('programas.edit', compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Programa $programa)
    {
        request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
        $programa->update($request->all());
        return redirect()->route('programas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Programa::destroy($id);
        return redirect('programas');
    }
}
