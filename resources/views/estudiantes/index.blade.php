    @extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading">Estudiantes</h1>
        </div> 
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @can('crear-estudiante')
                            <a class="btn btn-warning" href="{{ route('estudiantes.create')}}">Nuevo</a>
                            @endcan
                            <table class="table table-stripep mt-2">
                                <thead style="background-color: #6777ef">
                                    <th style="color: #fff">ID</th>
                                    <th style="color: #fff">Nombre</th>
                                    <th style="color: #fff">Apellido</th>
                                    <th style="color: #fff">Telefono</th>
                                    <th style="color: #fff">Correo</th>
                                    <th style="color: #fff">Direccion</th>
                                    <th style="color: #fff">Docente</th>
                                    <th style="color: #fff">Curso</th>
                                    <th style="color: #fff">Acciones</th>

                                </thead>
                                <tbody>
                                    @foreach($estudiantes as $estudiante)
                                    <tr>
                                        <td>{{$estudiante->id}}</td>
                                        <td>{{$estudiante->nombre}}</td>
                                        <td>{{$estudiante->apellido}}</td>
                                        <td>{{$estudiante->telefono}}</td>
                                        <td>{{$estudiante->correo}}</td>
                                        <td>{{$estudiante->direccion}}</td>
                                        <td>{{$estudiante->id_docentes}}</td>
                                        <td>{{$estudiante->id_cursos}}</td>
                                        <td>
                                            <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">
                                                @can('editar-estudiante')
                                                <a href="{{ route('estudiantes.edit',$estudiante->id)}}" class="btn btn-primary">Editar</a>
                                                @endcan

                                                @csrf
                                                @method('DELETE')
                                                @can('borrar-estudiante')
                                                <button type="submit" class="btn btn-warning">Borrar</button>
                                                @endcan
                                            </form>
                                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $estudiantes->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
