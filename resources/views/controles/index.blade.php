@extends('layouts.app')
@section('title')
    Control prenatal
@endsection
 
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">REGISTRO DE CONTROLES PARA FICHA CLINICA PRENATAL Y/O POSPARTO</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('controles.create') }}">Ingresar control de paciente</a>
                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('controles.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el nombre para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                            </div>
                                        </div>
                                    </form>
                                </div>
 
                            </div>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Mostar</th>
                                    @can('editar-controle')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-controle')
                                    <th style="color:#fff;">Borrar</th>
                                    @endcan
                                    <th style="color:#fff;">Fecha</th>
                                    <th style="color:#fff;">Datos de paciente</th>
                                    <th style="color:#fff;">DPI</th>
                                </thead>

                                <tbody>
                                    @foreach($controles as $control)

                                    
                                        <tr>
                                            <td style="display: none;">{{ $control->idControles }}</td>
                                            <td>
                                            <a class="btn btn-success mr-3" href="{{ route('controles.show', $control->idControles) }}">Mostar</a>
                                            </td>
                                            @can('editar-controle')
                                            <td>
                                                <a class="btn btn-info mr-3" href="{{ route('controles.edit', $control->idControles) }}">Editar</a>
                                            </td>
                                            @endcan
                                            @can('borrar-controle')
                                            <td>
                                            <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#modal-delete-{{$control->idControles}}">Eliminar</button>
                                            </td>
                                            @endcan
                                            <td>{{$control->FechaVisita}}</td>                                          
                                            <td>{{$control->NombresPaciente}}</td>
                                            <td>{{$control->CUI}}</td>

                                            
              
                                        </tr>
                                        @include('controles.delete')
                                    @endforeach
                                </tbody>

                                
                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $controles->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection