@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading m-4">Docentes</h1>
        </div> 
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @can('crear-curso')
                            <a class="btn btn-warning" href="{{ route('docentes.create')}}">Nuevo</a>
                            @endcan
                            <table class="table table-stripep mt-2">
                                <thead style="background-color: #6777ef">
                                    <th style="color: #fff">ID</th>
                                    <th style="color: #fff">Nombre</th>
                                    <th style="color: #fff">Apellido</th>
                                    <th style="color: #fff">Telefono</th>
                                    <th style="color: #fff">Correo</th>
                                    <th style="color: #fff">Direccion</th>
                                    <th style="color: #fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($docentes as $docente)
                                    <tr>
                                        <td>{{$docente->id}}</td>
                                        <td>{{$docente->nombre}}</td>
                                        <td>{{$docente->apellido}}</td>
                                        <td>{{$docente->telefono}}</td>
                                        <td>{{$docente->correo}}</td>
                                        <td>{{$docente->direccion}}</td>
                                        <td>
                                            <form action="{{ route('docentes.destroy',$docente->id) }}" method="POST">
                                                @can('editar-docente')
                                                <a href="{{ route('docentes.edit',$docente->id)}}" class="btn btn-primary">Editar</a>
                                                @endcan

                                                @csrf
                                                @method('DELETE')
                                                @can('borrar-docente')
                                                <button type="submit" class="btn btn-warning">Borrar</button>
                                                @endcan
                                            </form>
                                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $docentes->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
