@extends('layouts.app')
@section('title')
    Vacunas
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
                            <a class="btn btn-warning" href="{{ route('vacunas.registro') }}">Ingresar vacunas</a>
                            @endcan          
                            
                            
                           

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre de la vacuna</th>
                                    <th style="color:#fff;">Cantidad</th>
                                </thead>
                                            
                                <tbody>
                                    <tr>
                                        <td>Td</td>
                                        <td>{{$vacunastd}}</td>
                                    </tr>
                                    <tr>
                                        <td>Covid</td>
                                        <td>{{$vacunascovid}}</td>
                                    </tr>
                                    <tr>
                                        <td>Influenza</td>
                                        <td>{{$vacunainfluenza}}</td>
                                    </tr>
                                    <tr>
                                        <td>TdAp</td>
                                        <td>{{$vacunastdap}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            <table class="table  table-striped mt-2 table-responsive">
                <thead style="background-color: #6777ef;">
                    <th style="display: none;">ID</th>
                    <th style="color:#fff;">Nombre de la vacuna</th>
                    <th style="color:#fff;">Tipo de vacuna</th>
                    <th style="color:#fff;">Cantidad</th>
                    <th style="color:#fff;">Estado de la vacuna</th>
                    <th style="color:#fff;">Fecha de ingreso</th>
                    <th style="color:#fff;">Fecha de vencimiento</th>
                </thead>
                                
                <tbody>
                        @foreach($vacunas as $vacuna)
                            <tr>
                                <td style="display: none;">{{ $vacuna->idVacunas }}</td>
                                <td>{{$vacuna->NombreVacuna}}</td>
                                <td>{{$vacuna->TipoVacuna}}</td>
                                <td>{{$vacuna->Cantidad}}</td>
                                <td>{{$vacuna->EstadoVacuna}}</td>
                                <td>{{ date('d-m-Y', strtotime($vacuna->Fechaingreso))}}</td>
                                <td>{{ date('d-m-Y', strtotime($vacuna->FechaVencimiento))}}</td>
                        @endforeach
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
