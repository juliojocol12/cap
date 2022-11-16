@extends('layouts.app')
@section('title')
Pueblos
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Pueblo</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('pueblos.create') }}">Nuevo</a>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    @can('editar-pueblo')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-pueblo')
                                    <th style="color:#fff;">Borrar</th>
                                    @endcan
                                    <th style="color:#fff;">Nombre</th>
                                </thead>
                                <tbody>
                                    @foreach($pueblos as $pueblo)
                                        <tr>
                                            <td style="display: none;">{{ $pueblo->idPueblo }}</td>
                                            @can('editar-pueblo')
                                            <td>
                                                <a class="btn btn-info" href="{{ route('pueblos.edit', $pueblo->idPueblo) }}">Editar</a>
                                            </td>   
                                            @endcan
                                            @can('borrar-pueblo')
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$pueblo->idPueblo}}">Eliminar</button>
                                            </td>   
                                            @endcan
                                            <td>{{$pueblo->Nombre}}</td>
                                                                                
                                        </tr>
                                    @include('pueblos.delete')
                                    @endforeach
                                </tbody>
                            </table>
                                
                            
                            <div class="pagination justify-content-end">
                                {!! $pueblos->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
