@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Primer Control Postparto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        <a class="btn btn-warning" href="{{ route('primercontrolpostparto.create') }}">Nuevo</a>
            
                        <table class="table table-striped table-bordered table-responsive mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">NombreServicio</th>
                                    <th style="color:#fff;">DiasDespuesParto</th>                                    
                                    <th style="color:#fff;">DondeAtendioParto</th>
                                    <th style="color:#fff;">QuienAtendioParto</th>
                                    <th style="color:#fff;">HeridaOperatoria</th>
                                    <th style="color:#fff;">InvolucionUterina</th>  
                                    <th style="color:#fff;">PresionArterial</th>
                                    <th style="color:#fff;">FrecuenciaCardiaca</th> 
                                    <th style="color:#fff;">Temperatura</th>
                                    <th style="color:#fff;">ExamenMamas</th>
                                    <th style="color:#fff;">ExamenGinecologico</th>
                                    <th style="color:#fff;">LactanciaMaterna</th>
                                    <th style="color:#fff;">PorqueNoLactanciaMaterna</th>
                                    <th style="color:#fff;">Diagnostico</th>
                                    <th style="color:#fff;">ConductaTratamiento</th>
                                    <th style="color:#fff;">Acciones</th>
                              </thead>
                              <tbody>
                            @foreach ($primercontrolpostpartos as $primercontrolpostparto)
                            <tr>
                                <td style="display: none;">{{ $primercontrolpostparto->idPrimerControlPostpartos }}</td>                                
                                <td>{{ $primercontrolpostparto->NombreServicio }}</td>
                                <td>{{ $primercontrolpostparto->DiasDespuesParto }}</td>
                                <td>{{ $primercontrolpostparto->DondeAtendioParto }}</td>
                                <td>{{ $primercontrolpostparto->QuienAtendioParto }}</td>
                                <td>{{ $primercontrolpostparto->HeridaOperatoria }}</td>
                                <td>{{ $primercontrolpostparto->InvolucionUterina }}</td>
                                <td>{{ $primercontrolpostparto->PresionArterial }}</td>
                                <td>{{ $primercontrolpostparto->FrecuenciaCardiaca }}</td>
                                <td>{{ $primercontrolpostparto->Temperatura }}</td>
                                <td>{{ $primercontrolpostparto->ExamenMamas }}</td>
                                <td>{{ $primercontrolpostparto->ExamenGinecologico }}</td>
                                <td>{{ $primercontrolpostparto->LactanciaMaterna }}</td>
                                <td>{{ $primercontrolpostparto->PorqueNoLactanciaMaterna }}</td>
                                <td>{{ $primercontrolpostparto->Diagnostico }}</td>
                                <td>{{ $primercontrolpostparto->ConductaTratamiento }}</td>
                                <td>
                                    
                                    <a class="btn btn-info" href="{{ route('primercontrolpostparto.edit', $primercontrolpostparto->idPrimerControlPostpartos) }}">Editar</a>
                                    {!! Form::open(['method'=> 'DELETE', 'route'=> ['primercontrolpostparto.destroy', $primercontrolpostparto->idPrimerControlPostpartos], 'style'=>'display:inline' ]) !!}
                                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>                      
                                        </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->                                      
                        <div class="pagination justify-content-end">
                            {!! $primercontrolpostpartos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection