@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page-heading">Crear Nota</h3>
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

                            <form action="{{ route('notas.store') }}" method="POST">
                              @csrf
                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nota1">Nota 1: </label>
                                        <input type="number" step="any" name="nota1" id="nota1" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nota2">Nota 2: </label>
                                        <input type="number" step="any" name="nota2" id="nota2" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nota3">Nota 3: </label>
                                        <input type="number" step="any" name="nota3" id="nota3" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="definitiva">Definitiva </label>
                                        <input type="number" step="any" name="definitiva" id="definitiva" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="id_estudiante">Estudiante </label>
                                    <div class="form-group">
                                       
                                        <select name="id_estudiantes" id="id_estudiantes" class="form-control" required>
                                            <option value="">Seleccionar alumno</option>
                                            @foreach ($estudiante as $estudiante)
                                            <option value="{{$estudiante->id }}">
                                               {{$estudiante->Nombre}}</option>
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
