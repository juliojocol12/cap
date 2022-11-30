@extends('layouts.app')
@section('title')
    Datos de vacunas
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Vacunas</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-vacuna')
                            <a class="btn btn-warning" href="{{ route('vacunas.create') }}">Ingresar vacunas</a>
                            @endcan
                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre de la vacuna</th>
                                    <th style="color:#fff;">Tipo de vacuna</th>
                                    <th style="color:#fff;">Cantidad</th>
                                    <th style="color:#fff;">Estado de la vacuna</th>
                                    <th style="color:#fff;">Fecha de ingreso</th>
                                    <th style="color:#fff;">Fecha de vencimiento</th>
                                    <th style="color:#fff;">Usuario que ingreso el registro</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                                
                                <tbody>
                                    @if(count($vacunas)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @else
                                        @foreach($vacunas as $vacuna)
                                            <tr>
                                                <td style="display: none;">{{ $vacuna->idVacunas }}</td>
                                                <td>{{$vacuna->NombreVacuna}}</td>
                                                <td>{{$vacuna->TipoVacuna}}</td>
                                                <td>{{$vacuna->Cantidad}}</td>
                                                <td>{{$vacuna->EstadoVacuna}}</td>
                                                <td>{{ date('d-m-Y', strtotime($vacuna->Fechaingreso))}}</td>
                                                <td>{{ date('d-m-Y', strtotime($vacuna->FechaVencimiento))}}</td>
                                                <td>{{\Illuminate\Support\Facades\Auth::user()->name}}</td>

                                                <td>
                                                    <a class="btn btn-success mr-3" href="{{ route('vacunas.show',  $vacuna->idVacunas) }}">Mostar</a>
                                                    <a class="btn btn-info mr-3" href="{{ route('vacunas.edit', $vacuna->idVacunas) }}">Editar</a>
                                                                
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$vacuna->idVacunas}}">Eliminar</button>
                                                </td>
                                            </tr>
                                            @include('vacunas.delete')
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $vacunas->links() !!}
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection
