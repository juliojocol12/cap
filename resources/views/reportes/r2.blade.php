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
                <a href="{{ route('reportes.index') }}" class="btn btn-success mr-3">Volver</a> 
                    <div class="card">
                    
                        <div class="card-body">

                            <h1>Madres embarazadas por trimestre</h1>

                            <div align="left">
                                <form action="{{ route('reportes.r2') }}" method="GET">
                                    <div class="form-row">
                                        <div class="col-sm-2 my-1">
                                            <label for="">¿Qué trimestre?</label>
                                            <input type="text" class="form-control" name="filtroSemana" autocomplete="off" value="{{$busquedaSemana}}" placeholder="Ingrese el nombre de la paciente">
                                        </div>
                                        <div class="col-sm-2 my-1">
                                            <label for="">Filtrar por nombres</label>
                                            <input type="text" class="form-control" name="filtroNombre" autocomplete="off" value="{{$busquedaNombre}}" placeholder="Ingrese el nombre de la paciente">
                                        </div>
                                        <div class="col-sm-2 my-1">
                                            <label for="">Filtrar por apellido</label>
                                            <input type="text" class="form-control" name="filtroApellido" autocomplete="off" value="{{$busquedaApellido}}" placeholder="Ingrese el apellido de la paciente">
                                        </div>
                                        <div class="col-sm-2 my-1">
                                            <label for="">Filtrar por DPI</label>
                                            <input type="text" class="form-control" name="filtroDPI" autocomplete="off" value="{{$busquedaDPI}}" placeholder="Ingrese el DPI de la paciente">
                                        </div>
                                        <div class="col-sm-2 my-1">
                                            <label for="">Filtrar por número de control</label>
                                            <input type="text" class="form-control" name="filtroNoControl" autocomplete="off" value="{{$busquedaNoControl}}" placeholder="Ingrese el número de control">
                                        </div>
                                        <div class="col-sm-2 my-1">
                                            <label for="">Datos a mostrar</label>
                                            <input type="text" class="form-control" name="filtroPagina" autocomplete="off" value="{{$busquedaPagina}}" placeholder="Ingrese el número de datos">
                                        </div>
                                        <div class="col-sm-4 my-1">
                                            <input type="submit" class="btn btn-primary" value="Buscar">
                                            <a href="{{ route('reportes.r2') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div align="left">
                                <form action="{{ route('pacientes.pdf2') }}" method="GET">
                                    <div class="d-none">
                                    <div class="col-sm-2 my-1">
                                            <label for="">¿Qué trimestre?</label>
                                            <input type="text" class="form-control" name="filtroSemana" autocomplete="off" value="{{$busquedaSemana}}" placeholder="Ingrese el nombre de la paciente">
                                        </div>
                                        <div class="col-sm-2 my-1">
                                            <label for="">Filtrar por nombres</label>
                                            <input type="text" class="form-control" name="filtroNombre" autocomplete="off" value="{{$busquedaNombre}}" placeholder="Ingrese el nombre de la paciente">
                                        </div>
                                        <div class="col-sm-2 my-1">
                                            <label for="">Filtrar por apellido</label>
                                            <input type="text" class="form-control" name="filtroApellido" autocomplete="off" value="{{$busquedaApellido}}" placeholder="Ingrese el apellido de la paciente">
                                        </div>
                                        <div class="col-sm-2 my-1">
                                            <label for="">Filtrar por DPI</label>
                                            <input type="text" class="form-control" name="filtroDPI" autocomplete="off" value="{{$busquedaDPI}}" placeholder="Ingrese el DPI de la paciente">
                                        </div>
                                        <div class="col-sm-2 my-1">
                                            <label for="">Filtrar por número de control</label>
                                            <input type="text" class="form-control" name="filtroNoControl" autocomplete="off" value="{{$busquedaNoControl}}" placeholder="Ingrese el número de control">
                                        </div>
                                        <div class="col-sm-2 my-1">
                                            <label for="">Datos a mostrar</label>
                                            <input type="text" class="form-control" name="filtroPagina" autocomplete="off" value="{{$busquedaPagina}}" placeholder="Ingrese el número de datos">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 my-1">
                                        <input formtarget="_blank" type="submit"  class="btn btn-warning" value="Descargar reporte">
                                    </div>
                                </form>
                            </div>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Fecha</th>
                                    <th style="color:#fff;">Nombre de la paciente</th>
                                    <th style="color:#fff;">Apellido de la paciente</th>
                                    <th style="color:#fff;">DPI</th>
                                    <th style="color:#fff;">No. de control</th>
                                    <th style="color:#fff;">Semana de embarazo</th>
                                </thead>

                                <tbody>
                                    @foreach($controles as $control)
                                        <tr>
                                            <td>{{ date('d-m-Y', strtotime($control->FechaVisita))}}</td>                                          
                                            <td>{{$control->NombresPaciente}}</td>
                                            <td>{{$control->ApellidosPaciente}}</td>
                                            <td>{{$control->CUI}}</td>        
                                            <td>{{$control->NoControl}}</td>   
                                            <td>{{$control->SemanasEmbarazo}}</td>                                      
              
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