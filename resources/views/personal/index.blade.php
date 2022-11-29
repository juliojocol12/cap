@extends('layouts.app')
@section('title')
    Personal
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Colaboradores del CAP</h3>
        </div> 
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" onkeypress="return pulsar(event)">

                        @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                        @endif

                        @can('crear-personal')
                            <a class="btn btn-warning" href="{{ route('usuarios.create') }}">Nuevo</a>
                            <a class="btn btn-success" href="{{ route('usuarios.index') }}">Usuarios existentes</a>
                        @endcan
                        

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('personal.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <label for=""><b>Filtrar por nombre</b> </label>
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese un nombre para buscar">
                                            </div>

                                            <div class="col-sm-4 my-1">
                                                <label for=""><b>Filtrar por DPI</b> </label>
                                                <input type="text" class="form-control" name="CUI" autocomplete="off" value="{{$CUI}}" placeholder="Ingrese algún valor para buscar">
                                            </div>

                                            <div class="col-sm-4 my-1">
                                                <label for=""><b>Filtrar por cargo</b> </label>
                                                <input type="text" class="form-control" name="Cargo" autocomplete="off" value="{{$Cargo}}" placeholder="Ingrese algún valor para buscar">
                                            </div>

                                            <div class="col-sm-4 my-1">
                                                <label for=""><b>Filtrar por celular</b> </label>
                                                <input type="text" class="form-control" name="Celular" autocomplete="off" value="{{$Celular}}" placeholder="Ingrese algún valor para buscar">
                                            </div>

                                            <div class="col-sm-4 my-1">
                                                <label for=""><b>Filtrar por tipo de sangre</b> </label>
                                                <input type="text" class="form-control" name="Sangre" autocomplete="off" value="{{$Sangre}}" placeholder="Ingrese algún valor para buscar">
                                            </div>
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('personal.index') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
            
                        <table class="table  table-striped mt-2 table-responsive">
                            <thead style="background-color:#6777ef">                                     
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Mostrar</th>
                                @can('editar-personal')
                                <th style="color:#fff;">Editar</th>
                                @endcan
                                @can('borrar-personal')
                                <th style="color:#fff;">Borrar</th>
                                @endcan
                                <th style="color:#fff;">Nombre</th>
                                <th style="color:#fff;">DPI</th>   
                                <th style="color:#fff;">Celular</th>
                                <th style="color:#fff;">Cargo</th>
                                                                                            
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
                                        <td>
                                            <a class="btn btn-success mr-3" href="{{ route('personal.show', $personal->idPersonal) }}">Mostar</a>
                                            </td>
                                        @can('editar-personal')
                                        <td>                                            
                                            <a class="btn btn-info" href="{{ route('personal.edit', $personal->idPersonal) }}">Editar</a>                                            
                                        </td>
                                        @endcan
                                        @can('borrar-personal')
                                        <td>                                            
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$personal->idPersonal}}">Eliminar</button>
                                        </td>
                                        @endcan
                                        <td>{{ $personal->Nombre }}</td>
                                        <td>{{ $personal->CUI }}</td>
                                        <td>{{ $personal->Celular }}</td>
                                        <td>{{ $personal->Cargo }}</td>                 
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