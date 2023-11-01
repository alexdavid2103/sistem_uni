@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading m-4">Notas</h1>
        </div> 
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @can('crear-nota')
                            <a class="btn btn-warning" href="{{ route('notas.create')}}">Nuevo</a>
                            @endcan
                            <table class="table table-stripep mt-2">
                                <thead style="background-color: #6777ef">
                                    <th style="color: #fff">ID</th>
                                    <th style="color: #fff">Estudiante</th>
                                    <th style="color: #fff">Nota 1</th>
                                    <th style="color: #fff">Nota 2</th>
                                    <th style="color: #fff">Nota 3</th>
                                    <th style="color: #fff">Definitiva</th>
                                    <th style="color: #fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($notas as $nota)
                                    <tr>
                                        <td>{{$nota->id}}</td>
                                        <td>{{$nota->id_estudiantes}}</td>
                                        <td>{{$nota->nota1}}</td>
                                        <td>{{$nota->nota2}}</td>
                                        <td>{{$nota->nota3}}</td>
                                        <td>{{$nota->definitiva}}</td>
                                        <td>
                                            <form action="{{ route('notas.destroy',$nota->id) }}" method="POST">
                                                @can('editar-nota')
                                                <a href="{{ route('notas.edit',$nota->id)}}" class="btn btn-primary">Editar</a>
                                                @endcan

                                                @csrf
                                                @method('DELETE')
                                                @can('borrar-nota')
                                                <button type="submit" class="btn btn-warning">Borrar</button>
                                                @endcan
                                            </form>
                                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="pagination justify-content-end">
                                {!! $notas->links() !!}
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
