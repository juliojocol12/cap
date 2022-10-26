@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos de familiares</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('datosfamiliares.create') }}">Nuevo</a>

                            <table class="table  table-striped table-bordered table-responsive mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombres</th>
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">CUI</th>
                                    <th style="color:#fff;">Número de telefono</th>

                                    <th style="color:#fff;">Número de celular</th>

                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                
                                <tbody>
                                    @foreach($datosfamiliares as $datosfamiliare)
                                        <tr>
                                            <td style="display: none;">{{ $datosfamiliare->idDatosFamiliares }}</td>
                                            <td>{{$datosfamiliare->NombresFamiliar}}</td>
                                            <td>{{$datosfamiliare->ApellidosFamiliar}}</td>
                                            <td>{{$datosfamiliare->CUI}}</td>
                                            <td>{{$datosfamiliare->TelefonoFamiliar}}</td>
                                            <td>{{$datosfamiliare->CelularFamiliar}}</td>
                                            
                                            <td>
                                                
                                                <a class="btn btn-info" href="{{ route('datosfamiliares.edit', $datosfamiliare->idDatosFamiliares) }}">Editar</a>
                                                {!! Form::open(['method'=> 'DELETE', 'route'=> ['datosfamiliares.destroy', $datosfamiliare->idDatosFamiliares], 'style'=>'display:inline' ]) !!}
                                                    <input type="submit" onclick="return confirm ('¿Desea eliminar la información {{ $datosfamiliare->NombresFamiliar }} {{ $datosfamiliare->ApellidosFamiliar }} ?')" class="btn btn-danger" value="Borrar">
                                                {!! Form::close() !!}
                                                

                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $datosfamiliares->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
