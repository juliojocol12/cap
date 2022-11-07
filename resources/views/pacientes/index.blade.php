@extends('layouts.app')
@section('title')
    Embarazadas
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Embarazadas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif
                            
                            <a class="btn btn-warning" href="{{ route('pacientes.create') }}">Nuevo</a>

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('pacientes.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el CUI para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('pacientes.index') }}" class="btn btn-danger mr-3">Borrar busqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="color:#fff;">Nombres</th>
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">DPI</th>
                                    <th style="color:#fff;">Telefono</th>
                                    <th style="color:#fff;">Celular</th>
                                    <th style="color:#fff;">Pueblo</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                            
                                
                                <tbody>
                                    @if(count($datospersonalespacientes)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @else
                                    @foreach($datospersonalespacientes as $paciente)
                                        <tr "table-active">
                                      
                                            <td>{{$paciente->NombresPaciente}}</td>
                                            <td>{{$paciente->ApellidosPaciente}}</td> 
                                            <td>{{$paciente->CUI}}</td> 
                                            <td>{{$paciente->Telefono}}</td> 
                                            <td>{{$paciente->Celular}}</td> 
                                            <td>{{$paciente->Nombre}}</td> 
                                            <td>
                                                <a class="btn btn-success mr-3" href="{{ route('pacientes.show', $paciente->idDatosPersonalesPacientes) }}">Mostar</a>
                                                <a href="{{ route('pacientes.edit', $paciente->idDatosPersonalesPacientes) }}" class="btn btn-info mr-3">Editar</a>
                                                <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#modal-delete-{{$paciente->idDatosPersonalesPacientes}}">Eliminar</button>
                                            </td>                                    
                                        </tr>
                                    @include('pacientes.delete')
                                    @endforeach
                                    @endif
                                </tbody>

                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $datospersonalespacientes->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
