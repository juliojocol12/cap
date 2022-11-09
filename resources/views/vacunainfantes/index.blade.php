@extends('layouts.app')
@section('title')
    Infantes
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Vacunación del infante</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                                                        
                            <a class="btn btn-warning" href="{{ route('vacunainfantes.create') }}">Ingresar vacuna para infante</a>

                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif 

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('vacunainfantes.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el Nombre para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('vacunainfantes.index') }}" class="btn btn-danger mr-3">Borrar busqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            
                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Fecha de sumistro de la vacuna</th>
                                    <th style="color:#fff;">Vacuna</th>
                                    <th style="color:#fff;">Infante</th>

                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                
                                <tbody>
                                    @if(count($vacunainfantes)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @else
                                    @foreach($vacunainfantes as $vacunainfante)
                                        <tr>
                                            <td style="display: none;">{{ $vacunainfante->idVacunasInfantes}}</td>
                                            <td>{{$vacunainfante->FechaSuministro}}</td>
                                            <td>{{$vacunainfante->NombreVacuna}}</td>
                                            <td>{{$vacunainfante->Nombres}} {{$vacunainfante->Apellidos}}</td>
                                            <td>
                                                <a class="btn btn-success mr-3" href="{{ route('vacunainfantes.show',  $vacunainfante->idVacunasInfantes) }}">Mostar</a>
                                                <a class="btn btn-info mr-3" href="{{ route('vacunainfantes.edit', $vacunainfante->idVacunasInfantes) }}">Editar</a>
                                                
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$vacunainfante->idVacunasInfantes}}">Eliminar</button>

                                            </td>
                                        </tr>
                                        @include('vacunainfantes.delete')
                                    @endforeach
                                    @endif
                                </tbody>

                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $vacunainfantes->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection
