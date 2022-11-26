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
                            
                            <div class="pagination justify-content-end">
                                {!! $vacunas->links() !!}
                            </div>

                            @can('editar-vacuna')
                            <button type="button" class="btn btn-info" data-toggle="modal" id="guardarmodal" data-target="#modal-vacunas">Ver el total de las vacunas</button>
                            @include('vacunas.vacunas')
                            @endcan
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection
