@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">FICHA CLINICA PRENATAL Y/O POSPARTO</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('fcprenatalpostpartos.create') }}">Ingresar ficha</a>
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
                                    <th style="color:#fff;">No. Expediente</th>
                                    <th style="color:#fff;">Fecha</th>
                                    <th style="color:#fff;">Datos de paciente</th>
                                    <th style="color:#fff;">DPI</th>
                                    <th style="color:#fff;">Establecimiento Salud</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>

                                <tbody>
                                    @foreach($fcprenatalpostpartos as $fcprenatalpostparto)

                                    
                                        <tr>
                                            <td style="display: none;">{{ $fcprenatalpostparto->idFCPrenatalPostpartos }}</td>

                                            <td>{{$fcprenatalpostparto->Numerodireccion}}</td>
                                            <td>{{$fcprenatalpostparto->Fecha}}</td>

                                            
                                            <td>{{$fcprenatalpostparto->NombresPaciente}} {{$fcprenatalpostparto->ApellidosPaciente}}</td>
                                            <td>{{$fcprenatalpostparto->CUI}}</td>

                                            
                                            <td>{{$fcprenatalpostparto->establecimientosaludos->Nombre}} </td>

                                            <td>
                                                <a class="btn btn-success mr-3" href="{{ route('fcprenatalpostpartos.show', $fcprenatalpostparto->idFCPrenatalPostpartos) }}">Mostar</a>
                                                <a class="btn btn-info mr-3" href="{{ route('fcprenatalpostpartos.edit', $fcprenatalpostparto->idFCPrenatalPostpartos) }}">Editar</a>
                                                
                                                <!-- Button trigger modal -->                                                
                                                <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#modal-delete-ficha">Eliminar</button>

                                            </td>
                                            
              
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