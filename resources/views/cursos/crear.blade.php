@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page-heading">Crear Cursos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                               @foreach ($errors->all() as $error)
                                 <span class="badge badge-danger">{{$error}}</span>
                               @endforeach
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                               </button>
                            </div>
                            @endif

                            <form action="{{ route('cursos.store') }}" method="POST">
                              @csrf
                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="nombre" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="apellido">Descripcion</label>
                                        <textarea type="text" name="descripcion" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="programa">Selecionar Programa</label>
                                    <div class="form-group">
                                        <select name="id_programa" id="id_programa" class="form-control" required>
                                            <option value="" disabled>Seleccionar programa</option>
                                            @foreach ($programas as $programa)
                                            <option value="{{$programa->id }}">
                                               {{$programa->nombre}}</option>
                                            @endforeach
                                         </select>
                                    </div>
                                </div>
                     
                                    <button type="submit" class="btn btn-primary">Guardar</button>

                            </div>
                            </form>
                        
                            
                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
