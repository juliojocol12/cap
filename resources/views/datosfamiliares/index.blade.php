@extends('layouts.app')
@section('title')
    Familiares
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Familiares de pacientes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('datosfamiliares.create') }}">Nuevo</a>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Mostar</th>
                                    @can('editar-datosfamiliare')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-datosfamiliare')
                                    <th style="color:#fff;">Borrar</th>
                                    @endcan
                                    <th style="color:#fff;">Nombres</th>
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">DPI</th>
                                    <th style="color:#fff;">Número de teléfono</th>

                                    <th style="color:#fff;">Número de celular</th>

                                </thead>
                                
                                <tbody>
                                    @foreach($datosfamiliares as $datosfamiliare)
                                        <tr>
                                            <td style="display: none;">{{ $datosfamiliare->idDatosFamiliares }}</td>
                                            <td>
                                            <a class="btn btn-success mr-3" href="{{ route('datosfamiliares.show',  $datosfamiliare->idDatosFamiliares) }}">Mostar</a>
                                            </td>
                                            @can('editar-datosfamiliare')
                                            <td>
                                            <a class="btn btn-info mr-3" href="{{ route('datosfamiliares.edit', $datosfamiliare->idDatosFamiliares) }}">Editar</a>
                                            </td>
                                            @endcan
                                            @can('borrar-datosfamiliare')
                                            <td>
                                           <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#modal-delete-{{$datosfamiliare->idDatosFamiliares}}">Eliminar</button>
                                                

                                                </form>
                                            </td>
                                            @endcan
                                            <td>{{$datosfamiliare->NombresFamiliar}}</td>
                                            <td>{{$datosfamiliare->ApellidosFamiliar}}</td>
                                            <td>{{$datosfamiliare->CUI}}</td>
                                            <td>{{$datosfamiliare->TelefonoFamiliar}}</td>
                                            <td>{{$datosfamiliare->CelularFamiliar}}</td>
                                            
                                            

                                        </tr>
                                        @include('datosfamiliares.delete')
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
