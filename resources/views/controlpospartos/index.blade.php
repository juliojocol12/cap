@extends('layouts.app')
@section('title')
Control posparto
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">CONTROL DE POSPARTO</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('controlpospartos.create') }}">Ingresar control de madre</a>
                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('controlpospartos.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el Nombre para buscar">
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
                                    @can('editar-controlposparto')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-controlposparto')
                                    <th style="color:#fff;">Borrar</th>
                                    @endcan
                                    <th style="color:#fff;">NoControl</th>
                                    <th style="color:#fff;">FCEvaluacionPosparto_id</th>
                                    <th style="color:#fff;">SemanasDespuesParto</th>
                                    <th style="color:#fff;">FechaVisita</th>
                                </thead>

                                <tbody>
                                    @foreach($controlpospartos as $controlpos)

                                    
                                        <tr>
                                            <td style="display: none;">{{ $controlpos->idControlPosparto }}</td>
                                            <td>
                                            <a class="btn btn-success mr-3" href="{{ route('controlpospartos.show', $controlpos->idControlPosparto) }}">Mostar</a>
                                            </td>
                                            @can('editar-controlposparto')
                                            <td>
                                            <a class="btn btn-info mr-3" href="{{ route('controlpospartos.edit', $controlpos->idControlPosparto) }}">Editar</a>
                                            </td>
                                            @endcan
                                            @can('borrar-controlposparto')
                                            <td>
                                             <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#modal-delete-control">Eliminar</button>
                                            </td>
                                            @endcan
                                            <td>{{$controlpos->NoControl}}</td>
                                            <td>{{$controlpos->FCEvaluacionPosparto_id}}</td>
                                            <td>{{$controlpos->SemanasDespuesParto}}</td>
                                            <td>{{$controlpos->FechaVisita}}</td>

                                            
              
                                        </tr>
                                    @endforeach
                                </tbody>

                                
                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $controlpospartos->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection