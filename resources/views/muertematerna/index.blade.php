@extends('layouts.app')
@section('title')
    Muertes Maternas
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Muerte Materna</h3>
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

                        @can('crear-muertematerna')
                            <a class="btn btn-warning" href="{{ route('muertematernas.create') }}">Nuevo</a>
                        @endcan
                        

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('muertematernas.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese cualquier valor para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('muertematernas.index') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
            
                        <table class="table  table-striped mt-2 table-responsive">
                            <thead style="background-color:#6777ef">                                     
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Mostrar</th>
                                @can('editar-muertematerna')
                                <th style="color:#fff;">Editar</th>
                                @endcan
                                @can('borrar-muertematerna')
                                <th style="color:#fff;">Borrar</th>
                                @endcan
                                <th style="color:#fff;">Nombre de la paciente</th>
                                <th style="color:#fff;">DPI</th>
                                <th style="color:#fff;">Antecedentes</th>   
                                <th style="color:#fff;">Descripción</th>                                 
                                <th style="color:#fff;">Fecha de fallecimiento</th>
                                
                                                                                            
                            </thead>
                            <tbody>
                                @if(count($muertematernas)<=0)
                                    <tr>
                                        <td colspan="8">No hay resultados</td>
                                    </tr>
                                @else
                                
                                @foreach ($muertematernas as $muertematerna)
                                    <tr>
                                        
                                        <td style="display: none;">{{ $muertematerna->idMuerteMaterna }}</td>  
                                        {{--
                                        <td>
                                            <a class="btn btn-success mr-3" href="{{ route('muertematernas.show', $muertematerna->idMuerteMaterna) }}">Mostar</a>
                                        </td>
                                        --}}
                                        
                                        @can('editar-muertematerna')
                                       
                                        @endcan
                                        {{--

                                        @can('borrar-muertematerna')
                                        <td>                                            
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$muertematerna->idMuerteMaterna}}">Eliminar</button>
                                        </td>
                                        @endcan
                                        --}} 
                                        <td>{{ $muertematerna->NombresPaciente }} {{ $muertematerna->ApellidosPaciente }}</td>
                                        <td>{{ $muertematerna->CUI }}</td>
                                        <td>{{ $muertematerna->Antecedente }}</td>
                                        <td>{{ $muertematerna->Descripcion }}</td>
                                        <td>{{ $muertematerna->FechaMuerte }}</td>
                                        
                                                      
                                    </tr>
                                
                                @endforeach
                                @endif
                            </tbody>
                              
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->                                      
                        <div class="pagination justify-content-end">
                            {!! $muertematernas->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection