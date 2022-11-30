@extends('layouts.app')
@section('title')
Ficha clinica posparto
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ficha clínica posparto </h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('pospartos.create') }}">Ingresar ficha</a>
                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('pospartos.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el nombre para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('pospartos.index') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Mostar</th>
                                    @can('editar-fcevaluacionposparto')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-fcevaluacionposparto')
                                    <th style="color:#fff;">Borrar</th>
                                    @endcan
                                    <th style="color:#fff;">No. Expediente</th>
                                    <th style="color:#fff;">Fecha</th>
                                    <th style="color:#fff;">Datos de paciente</th>
                                    <th style="color:#fff;">DPI</th>
                                    <th style="color:#fff;">Establecimiento salud</th>
                                </thead>

                                <tbody>
                                    @foreach($fcevaluacionpospartos as $fcevaluacionposparto)

                                    
                                        <tr>
                                            <td style="display: none;">{{ $fcevaluacionposparto->idFCEvaluacionPosparto }}</td>
                                            <td>
                                            <a class="btn btn-success mr-3" href="{{ route('pospartos.show', $fcevaluacionposparto->idFCEvaluacionPosparto) }}">Mostar</a>
                                            </td>
                                            @can('editar-fcevaluacionposparto')
                                            <td>
                                            <a class="btn btn-info mr-3" href="{{ route('pospartos.edit', $fcevaluacionposparto->idFCEvaluacionPosparto) }}">Editar</a>
                                            </td>
                                            @endcan
                                            @can('borrar-fcevaluacionposparto')
                                            <td>
                                                 <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#modal-delete-ficha">Eliminar</button> 
                                            </td>
                                            @endcan
                                            <td>{{$fcevaluacionposparto->Numerodireccion}}</td>
                                            <td>{{$fcevaluacionposparto->FechaEvaluacionPosparto}}</td>

                                            
                                            <td>{{$fcevaluacionposparto->NombresPaciente}} {{$fcevaluacionposparto->ApellidosPaciente}}</td>
                                            <td>{{$fcevaluacionposparto->CUI}}</td>

                                            
                                            <td>{{$fcevaluacionposparto->establecimientosaludos->Nombre}} </td>

                                          
                                            
              
                                        </tr>
                                        @include('pospartos.delete')
                                    @endforeach
                                </tbody>
                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $fcevaluacionpospartos->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection