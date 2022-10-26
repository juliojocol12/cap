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
                            
                            <a class="btn btn-warning" href="{{ route('infantes.create') }}">Nuevo</a>

                            <table class="table  table-striped table-bordered table-responsive mt-2">
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
                                    @foreach($infantes as $infant)
                                        <tr>
                                            <td style="display: none;">{{ $infant->idInfantes }}</td>
                                            <td>{{$infant->Nombres}}</td>
                                            <td>{{$infant->Apellidos}}</td>
                                            <td>{{$infant->Genero}}</td>
                                            <td>{{$infant->FechaNacimiento}}</td>
                                            <td>{{$infant->HoraNaciemiento}}</td>
                                            <td>{{$infant->PesoLB}}</td>
                                            <td>{{$infant->PesoOnz}}</td>
                                            <td>{{$infant->Altura}}</td>
                                            <td>{{$infant->Observaciones}}</td>
                                            <td>{{$infant->FechaEgreso}}</td>
                                            <td>{{$infant->TipoSanguineo}}</td>
                                            <td>{{$infant->datospersonalespacientes->NombresPaciente}} {{$infant->datospersonalespacientes->ApellidosPaciente}}</td>
                                            <td>{{$infant->datosfamiliares->NombresFamiliar}} {{$infant->datosfamiliares->ApellidosFamiliar}}</td>
                                            <td>
                                                
                                                <a class="btn btn-info" href="{{ route('infantes.edit', $infant->idInfantes) }}">Editar</a>
                                                {!! Form::open(['method'=> 'DELETE', 'route'=> ['infantes.destroy', $infant->idInfantes], 'style'=>'display:inline' ]) !!}
                                                    <input type="submit" onclick="return confirm ('¿Desea eliminar la información {{ $infant->Nombres }} {{ $infant->Apellidos }} ?')" class="btn btn-danger" value="Borrar">
                                                {!! Form::close() !!}
                                                

                                                </form>
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
