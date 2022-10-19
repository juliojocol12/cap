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
                           
                        <a class="btn btn-warning" href="{{ route('conserjeriaposparto.create') }}">Nuevo</a>
            
                        <table class="table table-striped table-bordered mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Lactancia Materna Exclusiva</th>
                                    <th style="color:#fff;">Planificacion Familiar Posparto</th>                                    
                                    <th style="color:#fff;">Alimentacion Madre Lactante</th>
                                    <th style="color:#fff;">Lactancia Materna VIH</th>        
                                    <th style="color:#fff;">Mujer VIH</th>                                                      
                              </thead>
                              <tbody>
                            @foreach ($conserjeriapospartos as $conserjeriaposparto)
                            <tr>
                                <td style="display: none;">{{ $conserjeriaposparto->idConsejeriaPospartos }}</td>                                
                                <td>{{ $conserjeriaposparto->LactanciaMaternaExclusiva }}</td>
                                <td>{{ $conserjeriaposparto->PlanificacionFamiliarPosparto }}</td>
                                <td>{{ $conserjeriaposparto->AlimentacionMadreLactante }}</td>
                                <td>{{ $conserjeriaposparto->LactanciaMaternaVIH }}</td>
                                <td>{{ $conserjeriaposparto->MujerVIH }}</td>
                                <td>
                                    
                                    <a class="btn btn-info" href="{{ route('conserjeriaposparto.edit', $conserjeriaposparto->idConsejeriaPospartos) }}">Editar</a>
                                    {!! Form::open(['method'=> 'DELETE', 'route'=> ['conserjeriaposparto.destroy', $conserjeriaposparto->idConsejeriaPospartos], 'style'=>'display:inline' ]) !!}
                                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>                      
                                        </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->                                      
                        <div class="pagination justify-content-end">
                            {!! $conserjeriapospartos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
