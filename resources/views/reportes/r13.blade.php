@extends('layouts.app')
@section('title')
Reporte de vacunas
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Reportes</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                <a href="{{ route('reportes.index') }}" class="btn btn-success mr-3">Volver</a> 
                    <div class="card">
                    
                        <div class="card-body">

                            <h3>Vacunas</h3>
                        
                            <div align="right">
                                <form action="{{ route('vacunas.pdf13') }}" method="GET">
                                    <div class="col-sm-4 my-1">
                                        <input formtarget="_blank" type="submit"  class="btn btn-warning" value="Descargar reporte">
                                    </div>
                                </form>
                            </div>

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

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection