@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Infantes</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            
                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif

                                                        
                            <a class="btn btn-warning" href="{{ route('infantes.create') }}">Ingresar Infante</a>

                            
                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombres</th>
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">Datos de la mamá</th>
                                    <th style="color:#fff;">Datos de familiares</th>
                                    <th style="color:#fff;">Parentesco</th>

                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                
                                <tbody>
                                    @foreach($infantes as $infant)
                                        <tr>
                                            <td style="display: none;">{{ $infant->idInfantes }}</td>
                                            <td>{{$infant->Nombres}}</td>
                                            <td>{{$infant->Apellidos}}</td>
                                            <td>{{$infant->NombresPaciente}} {{$infant->datospersonalespacientes->ApellidosPaciente}}</td>
                                            <td>{{$infant->datosfamiliares->NombresFamiliar}} {{$infant->datosfamiliares->ApellidosFamiliar}}</td>
                                            <td>{{$infant->Parentesco}}</td>
                                            <td>
                                                <a class="btn btn-success mr-3" href="{{ route('infantes.show',  $infant->idInfantes) }}">Mostar</a>
                                                <a class="btn btn-info mr-3" href="{{ route('infantes.edit', $infant->idInfantes) }}">Editar</a>
                                                
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$infant->idInfantes}}">Eliminar</button>

                                            </td>
                                        </tr>
                                        @include('infantes.delete')
                                    @endforeach
                                </tbody>

                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $infantes->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection
