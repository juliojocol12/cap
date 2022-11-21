@extends('layouts.app')
@section('title')
    Ficha clínica prenatal
@endsection


@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ficha clínica prenatal</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('fcprenatalpostpartos.create') }}">Ingresar nueva ficha</a>
                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('fcprenatalpostpartos.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el nombre para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('fcprenatalpostpartos.index') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Mostar</th>
                                    @can('editar-fcprenatalpostparto')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-fcprenatalpostparto')
                                    <th style="color:#fff;">Borrar</th>
                                    @endcan
                                    <th style="color:#fff;">Número de expediente</th>
                                    <th style="color:#fff;">Fecha</th>
                                    <th style="color:#fff;">Datos de paciente</th>
                                    <th style="color:#fff;">DPI</th>
                                    <th style="color:#fff;">Establecimiento de salud</th>
                                </thead>

                                <tbody>
                                    @foreach($fcprenatalpostpartos as $fcprenatalpostparto)

                                    
                                        <tr>
                                            <td style="display: none;">{{ $fcprenatalpostparto->idFCPrenatalPostpartos }}</td>
                                            <td>
                                            <a class="btn btn-success mr-3" href="{{ route('fcprenatalpostpartos.show', $fcprenatalpostparto->idFCPrenatalPostpartos) }}">Mostar</a>
                                            </td>
                                            @can('editar-fcprenatalpostparto')
                                            <td>
                                            <a class="btn btn-info mr-3" href="{{ route('fcprenatalpostpartos.edit', $fcprenatalpostparto->idFCPrenatalPostpartos) }}">Editar</a>
                                            </td>
                                            @endcan
                                            @can('borrar-fcprenatalpostparto')
                                            <td>
                                            <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#modal-delete-ficha">Eliminar</button>
                                            </td>
                                            @endcan
                                            <td>{{$fcprenatalpostparto->Numerodireccion}}</td>
                                            <td>{{$fcprenatalpostparto->Fecha}}</td>

                                            
                                            <td>{{$fcprenatalpostparto->NombresPaciente}} {{$fcprenatalpostparto->ApellidosPaciente}}</td>
                                            <td>{{$fcprenatalpostparto->CUI}}</td>

                                            
                                            <td>{{$fcprenatalpostparto->establecimientosaludos->Nombre}} </td>

<<<<<<< HEAD
=======
                                            <td>
                                                <a class="btn btn-success mr-3" href="{{ route('fcprenatalpostpartos.show', $fcprenatalpostparto->idFCPrenatalPostpartos) }}">Mostar</a>
                                                <a class="btn btn-info mr-3" href="{{ route('fcprenatalpostpartos.edit', $fcprenatalpostparto->idFCPrenatalPostpartos) }}">Editar</a>
                                                <a class="btn btn-dark mr-3" href="{{ route('fcprenatalpostpartos.pdf', $fcprenatalpostparto->idFCPrenatalPostpartos) }}"><i class="fa-solid fa-download"></i></a>
                                                <!-- Button trigger modal -->                                                
                                                <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#modal-delete-ficha">Eliminar</button>
>>>>>>> Reportes

                                            
              
                                        </tr>
                                        @include('fcprenatalpostpartos.delete')
                                    @endforeach
                                </tbody>
                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $fcprenatalpostpartos->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection