@extends('layouts.app')
@section('title')
    Personal
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Personal</h3>
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

                        @can('crear-personal')
                            <a class="btn btn-warning" href="{{ route('personal.create') }}">Nuevo</a>
                        @endcan
                        

                        <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('personal.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el CUI para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('personal.index') }}" class="btn btn-danger mr-3">Borrar busqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
            
                        <table class="table  table-striped mt-2 table-responsive">
                            <thead style="background-color:#6777ef">                                     
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Nombre</th>
                                <th style="color:#fff;">CUI</th>                                    
                                <th style="color:#fff;">Telefono</th>
                                <th style="color:#fff;">Direccion</th>
                                <th style="color:#fff;">Cargo</th>
                                <th style="color:#fff;">FechaNacimiento</th>  
                                <th style="color:#fff;">NivelAcademico</th>
                                <th style="color:#fff;">CorreoElectronico</th> 
                                <th style="color:#fff;">Observaciones</th>  
                                <th style="color:#fff;">Acciones</th>                                                              
                            </thead>
                            <tbody>
                                @if(count($personales)<=0)
                                    <tr>
                                        <td colspan="8">No hay resultados</td>
                                    </tr>
                                @else
                                @foreach ($personales as $personal)
                                    <tr>
                                        <td style="display: none;">{{ $personal->idPersonal }}</td>                                
                                        <td>{{ $personal->Nombre }}</td>
                                        <td>{{ $personal->CUI }}</td>
                                        <td>{{ $personal->Telefono }}</td>
                                        <td>{{ $personal->Direccion }}</td>
                                        <td>{{ $personal->Cargo }}</td>
                                        <td>{{ $personal->FechaNacimiento }}</td>
                                        <td>{{ $personal->NivelAcademico }}</td>
                                        <td>{{ $personal->CorreoElectronico }}</td>
                                        <td>{{ $personal->Observaciones }}</td>
                                        <td>
                                            @can('editar-personal')
                                                <a class="btn btn-info" href="{{ route('personal.edit', $personal->idPersonal) }}">Editar</a>    
                                            @endcan
                                            @can('borrar-personal')
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$personal->idPersonal}}">Eliminar</button>
                                            @endcan
                                            
                                        </td>                      
                                    </tr>
                                @include('personal.delete')
                                @endforeach
                                @endif
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->                                      
                        <div class="pagination justify-content-end">
                            {!! $personales->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection