@extends('layouts.app')
@section('title')
    Infantes
@endsection

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
                                                        
                            <a class="btn btn-warning" href="{{ route('infantes.create') }}">Nuevo</a>

                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif 

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('infantes.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el nombre para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('infantes.index') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            
                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Mostar</th>
                                    @can('editar-infante')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-infante')
                                    <th style="color:#fff;">Borrar</th>
                                    @endcan
                                    <th style="color:#fff;">Nombres y apellidos </th>
                                    <th style="color:#fff;">Nombre de la madre</th>
                                    <th style="color:#fff;">DPI de la madre</th>
                                    <th style="color:#fff;">Nombre de familiar</th>
                                    <th style="color:#fff;">Parentesco</th>
                                </thead>
                                
                                <tbody>
                                    @if(count($infantes)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @else
                                    @foreach($infantes as $infant)
                                        <tr>
                                            <td style="display: none;">{{ $infant->idInfantes }}</td>
                                            <td>
                                            <a class="btn btn-success" href="{{ route('infantes.show',  $infant->idInfantes) }}">Mostar</a>
                                            </td>
                                            @can('editar-infante')
                                            <td>
                                            <a class="btn btn-info" href="{{ route('infantes.edit', $infant->idInfantes) }}">Editar</a>
                                            </td>
                                            @endcan
                                            @can('borrar-infante')
                                            <td>
                                               
                                               <!-- Button trigger modal -->
                                               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$infant->idInfantes}}">Eliminar</button>

                                           </td>
                                            @endcan
                                            <td>{{$infant->Nombres}}  {{$infant->Apellidos}}</td>
                                            <td>{{$infant->NombresPaciente}} {{$infant->ApellidosPaciente}}</td>
                                            <td>{{$infant->CUI}}</td>
                                            <td>{{$infant->datosfamiliares->NombresFamiliar}} {{$infant->datosfamiliares->ApellidosFamiliar}}</td>
                                            <td>{{$infant->Parentesco}}</td>
              
                                        </tr>
                                        @include('infantes.delete')
                                    @endforeach
                                    @endif
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
