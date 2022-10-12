@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Infantes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('infantes.create') }}">Ingresar Infante</a>

                            <table class="table  table-striped table-bordered mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombres</th>
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">Género</th>
                                    <th style="color:#fff;">Fecha de Nacimiento</th>
                                    <th style="color:#fff;">Hora de Naciemiento</th>
                                    <th style="color:#fff;">Peso en Libras</th>
                                    <th style="color:#fff;">Peso en Onzas</th>
                                    <th style="color:#fff;">Altura</th>
                                    <th style="color:#fff;">Observaciones</th>
                                    <th style="color:#fff;">Fecha de Egreso</th>
                                    <th style="color:#fff;">Tipo Sanguineo</th>
                                    <th style="color:#fff;">Datos de la mamá</th>
                                    <th style="color:#fff;">Datos de familiares</th>

                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                
                                <tbody>
                                    @foreach($infantes as $infante)
                                        <tr>
                                            <td style="display: none;">{{ $infante->idInfantes }}</td>
                                            <td>{{$infante->Nombres}}</td>
                                            <td>{{$infante->Apellidos}}</td>
                                            <td>{{$infante->Genero}}</td>
                                            <td>{{$infante->FechaNacimiento}}</td>
                                            <td>{{$infante->HoraNaciemiento}}</td>
                                            <td>{{$infante->PesoLB}}</td>
                                            <td>{{$infante->PesoOnz}}</td>
                                            <td>{{$infante->Altura}}</td>
                                            <td>{{$infante->Observaciones}}</td>
                                            <td>{{$infante->FechaEgreso}}</td>
                                            <td>{{$infante->TipoSanguineo}}</td>
                                            <td>{{$infante->DatosPersonalesPacientes_id}}</td>
                                            <td>{{$infante->DatosFamiliares_id}}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('infantes.edit', $infante->idInfantes) }}">Editar</a>
                                                {!! Form::open(['method'=> 'DELETE', 'route'=> ['infantes.destroy', $infante->idInfantes], 'style'=>'display:inline' ]) !!}
                                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>                      
                                        </tr>
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
