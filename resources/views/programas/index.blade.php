@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading m-4">Programas</h1>
        </div> 
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @can('crear-programa')
                            <a class="btn btn-warning" href="{{ route('programas.create')}}">Nuevo</a>
                            @endcan
                            <table class="table table-stripep mt-2">
                                <thead style="background-color: #6777ef">
                                    <th style="color: #fff">ID</th>
                                    <th style="color: #fff">Nombre</th>
                                    <th style="color: #fff">Descripcion</th>
                                    <th style="color: #fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($programas as $programa)
                                    <tr>
                                        <td>{{$programa->id}}</td>
                                        <td>{{$programa->nombre}}</td>
                                        <td>{{$programa->descripcion}}</td>
                                        <td>
                                            <form action="{{ route('programas.destroy',$programa->id) }}" method="POST">
                                                @can('editar-programa')
                                                <a href="{{ route('programas.edit',$programa->id)}}" class="btn btn-primary">Editar</a>
                                                @endcan

                                                @csrf
                                                @method('DELETE')
                                                @can('borrar-programa')
                                                <button type="submit" class="btn btn-warning">Borrar</button>
                                                @endcan
                                            </form>
                                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $programas->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
