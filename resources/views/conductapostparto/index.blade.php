@extends('layouts.app')
@section('title')
    Conducta Posparto
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Conducta Posparto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col -lg-12">
                    <div class="card">
                        <div class="card-body">
                           
                        <a class="btn btn-warning" href="{{ route('conductaposparto.create') }}">Nuevo</a>
            
                        <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    @can('editar-conductapostparto')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-conductapostparto')
                                    <th style="color:#fff;">Borrar</th>
                                    @endcan
                                    <th style="color:#fff;">SulfatoFerroso</th>
                                    <th style="color:#fff;">AcidoFolico</th>                                    
                                    <th style="color:#fff;">VacuncacionTdapMadre</th>
                                    <th style="color:#fff;">Medicamento</th>                                                   
                              </thead>
                              <tbody>
                            @foreach ($conductapostpartos as $conductapostparto)
                            <tr>
                                <td style="display: none;">{{ $conductapostparto->idConductaPospartos }}</td>    
                                @can('editar-conductapostparto')
                                <td>
                                   <a class="btn btn-info" href="{{ route('conductaposparto.edit', $conductapostparto->idConductaPospartos) }}">Editar</a>
                                </td>     
                                @endcan
                                @can('borrar-conductapostparto')
                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$conductapostparto->idConductaPospartos}}">Eliminar</button>
                                </td> 
                                    @endcan                            
                                <td>{{ $conductapostparto->SulfatoFerroso }}</td>
                                <td>{{ $conductapostparto->AcidoFolico }}</td>
                                <td>{{ $conductapostparto->VacuncacionTdapMadre }}</td>
                                <td>{{ $conductapostparto->Medicamento }}</td>
                                                    
                                        </tr>
                            @include('conductapostparto.delete')
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->                                      
                        <div class="pagination justify-content-end">
                            {!! $conductapostpartos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
