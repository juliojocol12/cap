@extends('layouts.app')
@section('title')
    Abortos
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Abortos</h3>
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

                        @can('crear-Aborto')
                            <a class="btn btn-warning" href="{{ route('abortos.create') }}">Nuevo</a>
                        @endcan
                        

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('abortos.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese cualquier valor para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('abortos.index') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
            
                        <table class="table  table-striped mt-2 table-responsive">
                            <thead style="background-color:#6777ef">                                     
                                <th style="display: none;">ID</th>
                                @can('editar-Aborto')
                                <th style="color:#fff;">Editar</th>
                                @endcan
                                @can('borrar-Aborto')
                                <th style="color:#fff;">Borrar</th>
                                @endcan
                                <th style="color:#fff;">Nombre de la paciente</th>
                                <th style="color:#fff;">DPI</th>
                                <th style="color:#fff;">Antecedentes</th>   
                                <th style="color:#fff;">Descripción</th>                                 
                                <th style="color:#fff;">Fecha de aborto</th>
                                
                                                                                            
                            </thead>
                            <tbody>
                                @if(count($abortos)<=0)
                                    <tr>
                                        <td colspan="8">No hay resultados</td>
                                    </tr>
                                @else
                                
                                @foreach ($abortos as $aborto)
                                    <tr>
                                        
                                        <td style="display: none;">{{ $aborto->idAbortos }}</td>  
                                        @can('editar-Aborto')
                                        <td>                                            
                                            <a class="btn btn-info" href="{{ route('abortos.edit', $aborto->idAbortos) }}">Editar</a>                                            
                                        </td>
                                        @endcan
                                        @can('borrar-Aborto')
                                        <td>                                            
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$aborto->idAbortos}}">Eliminar</button>
                                        </td>
                                        @endcan
                                        <td>{{ $aborto->NombresPaciente }} {{ $aborto->ApellidosPaciente }}</td>
                                        <td>{{ $aborto->CUI }}</td>
                                        <td>{{ $aborto->Antecedente }}</td>
                                        <td>{{ $aborto->Descripcion }}</td>
                                        <td>{{ $aborto->FechaAborto }}</td>
                                        <td>{{ $aborto->Estado }}</td>   
                                                      
                                    </tr>
                                
                                    @include('abortos.delete')
                                @endforeach
                                @endif
                            </tbody>
                              
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->                                      
                        <div class="pagination justify-content-end">
                            {!! $abortos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection