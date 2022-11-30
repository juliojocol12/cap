@extends('layouts.app')
@section('title')
    Control prenatal
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Reportes</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">

                            <h1>VISTA REPORTE R12</h1>


                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
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
                                        <td>{{$vacuna->NombreVacuna}}</td>
                                        <td>{{$vacuna->TipoVacuna}}</td>
                                        <td>{{$vacuna->Cantidad}}</td>
                                        <td>{{$vacuna->EstadoVacuna}}</td>
                                        <td>{{ date('d-m-Y', strtotime($vacuna->Fechaingreso))}}</td>
                                        <td>{{ date('d-m-Y', strtotime($vacuna->FechaVencimiento))}}</td>                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection