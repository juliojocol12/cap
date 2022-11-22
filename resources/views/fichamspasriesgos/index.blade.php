@extends('layouts.app')
@section('title')
    Ficha Riesgo Obstétrico MSPAS
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ficha de riesgo obstétrico del MSPAS Centro Nacional de Epidemiología</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('fichamspasriesgos.create') }}">Ingresar ficha</a>
                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('fichamspasriesgos.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el Nombre para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('fichamspasriesgos.index') }}" class="btn btn-danger mr-3">Borrar busqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Mostar</th>
                                    @can('editar-fichamspasriego')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-fichamspasriego')
                                    <th style="color:#fff;">Borrar</th>
                                    @endcan
                                    <th style="color:#fff;">No. Expediente</th>
                                    <th style="color:#fff;">Registro Número</th>
                                    <th style="color:#fff;">Datos de paciente</th>
                                    <th style="color:#fff;">DPI</th>
                                </thead>
                                <tbody>
                                    @if(count($fichamspasriesgos)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @else
                                    @foreach($fichamspasriesgos as $fichamspasriesgo)
 
                                    
                                        <tr>
                                            <td style="display: none;">{{ $fichamspasriesgo->idFichamspasriegos }}</td>
                                            <td>
                                            <a class="btn btn-success mr-3" href="{{ route('fichamspasriesgos.show', $fichamspasriesgo->idFichamspasriegos) }}">Mostar</a>
                                            </td>
                                            
                                            @can('editar-fichamspasriego')
                                            <td>
                                            <a class="btn btn-info mr-3" href="{{ route('fichamspasriesgos.edit', $fichamspasriesgo->idFichamspasriegos) }}">Editar</a>
                                            </td>
                                            @endcan
                                            @can('borrar-fichamspasriego')
                                            <td>
                                            <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#modal-delete-{{$fichamspasriesgo->idFichamspasriegos}}">Eliminar</button>
                                            </td>
                                            @endcan

                                            <td>{{$fichamspasriesgo->Numerodireccion}}</td>
                                            <td>{{$fichamspasriesgo->RegistroNo}}</td>

                                            
                                            <td>{{$fichamspasriesgo->NombresPaciente}} {{$fichamspasriesgo->ApellidosPaciente}}</td>
                                            <td>{{$fichamspasriesgo->CUI}}</td>

                                            
              
                                        </tr>
                                        @include('fichamspasriesgos.delete')
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $fichamspasriesgos->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection