@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Conducta Postparto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                           
                        <a class="btn btn-warning" href="{{ route('conductaposparto.create') }}">Nuevo</a>
            
                        <table class="table table-striped table-bordered mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">SulfatoFerroso</th>
                                    <th style="color:#fff;">AcidoFolico</th>                                    
                                    <th style="color:#fff;">VacuncacionTdapMadre</th>
                                    <th style="color:#fff;">Medicamento</th>                                                              
                              </thead>
                              <tbody>
                            @foreach ($conductapostpartos as $conductapostparto)
                            <tr>
                                <td style="display: none;">{{ $conductapostparto->idConductaPospartos }}</td>                                
                                <td>{{ $conductapostparto->SulfatoFerroso }}</td>
                                <td>{{ $conductapostparto->AcidoFolico }}</td>
                                <td>{{ $conductapostparto->VacuncacionTdapMadre }}</td>
                                <td>{{ $conductapostparto->Medicamento }}</td>
                                <td>
                                    
                                    <a class="btn btn-info" href="{{ route('conductaposparto.edit', $conductapostparto->idConductaPospartos) }}">Editar</a>
                                    {!! Form::open(['method'=> 'DELETE', 'route'=> ['conductaposparto.destroy', $conductapostparto->idConductaPospartos], 'style'=>'display:inline' ]) !!}
                                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>                      
                                        </tr>
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
