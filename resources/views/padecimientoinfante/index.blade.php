@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Padecimiento Infante</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        <a class="btn btn-warning" href="{{ route('padecimientoinfante.create') }}">Nuevo</a>
            
                        <table class="table  table-striped table-bordered table-responsive mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Tipo Control</th>
                                    <th style="color:#fff;">Fecha Control</th>                                    
                                    <th style="color:#fff;">Descripcion Control</th>        
                                    <th style="color:#fff;">Acciones</th>                                                       
                              </thead>
                              <tbody>
                            @foreach ($padecimientoinfantes as $padecimientoinfante)
                            <tr>
                                <td style="display: none;">{{ $padecimientoinfante->idPadecimientoInfantes }}</td>                                
                                <td>{{ $padecimientoinfante->TipoControl }}</td>
                                <td>{{ $padecimientoinfante->FechaControl }}</td>
                                <td>{{ $padecimientoinfante->DescripcionControl }}</td>
                                <td>
                                    
                                    <a class="btn btn-info" href="{{ route('padecimientoinfante.edit', $padecimientoinfante->idPadecimientoInfantes) }}">Editar</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$padecimientoinfante->idPadecimientoInfantes}}">Eliminar</button>
                                            </td>                      
                                        </tr>
                            @include('padecimientoinfante.delete')
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->                                      
                        <div class="pagination justify-content-end">
                            {!! $padecimientoinfantes->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
