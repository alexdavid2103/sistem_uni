@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading">Editar Estudiante</h1>
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

                            <form action="{{ route('estudiantes.update',$estudiante->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                          <label for="name">Nombre</label>
                                          <input type="text" name="nombre" class="form-control" value="{{ $estudiante->nombre }}">
                                      </div>
                                  </div>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                          <label for="apellido">Apellido</label>
                                          <input type="text" name="apellido" class="form-control" value="{{ $estudiante->apellido}}">
                                      </div>
                                  </div>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                          <label for="telefono">Telefono</label>
                                          <input type="number" name="telefono" class="form-control" value="{{ $estudiante->telefono}}">
                                      </div>
                                  </div>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                          <label for="correo">Correo</label>
                                          <input type="email" name="correo" class="form-control" value="{{ $estudiante->correo}}">
                                      </div>
                                  </div>
  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                          <label for="direccion">Direccion</label>
                                          <input type="text" name="direccion" class="form-control" value="{{ $estudiante->direccion}}">
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
