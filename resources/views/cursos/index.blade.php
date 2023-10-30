@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading m-4">Cursos</h1>
        </div> 
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @can('crear-curso')
                            <a class="btn btn-warning" href="{{ route('cursos.create')}}">Nuevo</a>
                            @endcan
                            <table class="table table-stripep mt-2">
                                <thead style="background-color: #6777ef">
                                    <th style="color: #fff">ID</th>
                                    <th style="color: #fff">Nombre</th>
                                    <th style="color: #fff">Descripcion</th>
                                    <th style="color: #fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($cursos as $curso)
                                    <tr>
                                        <td>{{$curso->id}}</td>
                                        <td>{{$curso->nombre}}</td>
                                        <td>{{$curso->descripcion}}</td>
                                        <td>
                                            <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST">
                                                @can('editar-curso')
                                                <a href="{{ route('cursos.edit',$curso->id)}}" class="btn btn-primary">Editar</a>
                                                @endcan

                                                @csrf
                                                @method('DELETE')
                                                @can('borrar-curso')
                                                <button type="submit" class="btn btn-warning">Borrar</button>
                                                @endcan
                                            </form>
                                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $cursos->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
