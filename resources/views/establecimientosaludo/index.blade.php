@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Establecimiento de Salud</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        <a class="btn btn-warning" href="{{ route('establecimientosaludo.create') }}">Nuevo</a>
            
                        <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Direccion</th>                                    
                                    <th style="color:#fff;">Comunidad</th>
                                    <th style="color:#fff;">Puesto de Salud</th>        
                                    <th style="color:#fff;">Acciones</th>                                                      
                              </thead>
                              <tbody>
                            @foreach ($establecimientosaludos as $establecimientosaludo)
                            <tr>
                                <td style="display: none;">{{ $establecimientosaludo->idEstablecimientoSaludos }}</td>                                
                                <td>{{ $establecimientosaludo->Nombre }}</td>
                                <td>{{ $establecimientosaludo->Direccion }}</td>
                                <td>{{ $establecimientosaludo->Comunidad }}</td>
                                <td>{{ $establecimientosaludo->PuestoSalud }}</td>
                                <td>
                                    
                                    <a class="btn btn-info" href="{{ route('establecimientosaludo.edit', $establecimientosaludo->idEstablecimientoSaludos) }}">Editar</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$establecimientosaludo->idEstablecimientoSaludos}}">Eliminar</button>
                                            </td>                      
                                        </tr>
                                        @include('establecimientosaludo.delete')
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->                                      
                        <div class="pagination justify-content-end">
                            {!! $establecimientosaludos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
