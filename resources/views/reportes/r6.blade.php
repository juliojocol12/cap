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

                            <h1>Cantidad de nacimientos por fechas</h1>

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('reportes.r6') }}" method="GET">
                                        
                                        <div class="form-row">
                                            <div class="col-sm-3 my-1">
                                                <label for="">¿Cuántos datos desea visualizar?</label>
                                                <input type="text" class="form-control" name="filtror6Pag" autocomplete="off" value="{{$busquedar6Pag}}" placeholder="Ingrese el número de datos desea visualizar">
                                            </div>

                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtro de fecha inicio</label>
                                                <input type="date" class="form-control" id="datePickerId2" name="filtror6FechaI" autocomplete="off" value="{{$busquedar6FechaI}}" placeholder="Ingrese el número de datos desea visualizar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtro de fecha final</label>
                                                <input type="date" class="form-control" id="datePickerId" name="filtror6FechaF" autocomplete="off" value="{{$busquedar6FechaF}}" placeholder="Ingrese el número de datos desea visualizar">
                                            </div>

                                        </div>    
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('reportes.r6') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                            </div>
                                        </div>                                
                                        
                                    </form>
                                </div>
                            </div>

                            <div class="row">
                                <form action="{{ route('nacidos.pdf6') }}" method="GET">
                                    <div class="d-none">
                                        <div class="col-sm-3 my-1">
                                                <label for="">¿Cuántos datos desea visualizar?</label>
                                                <input type="text" class="form-control" name="filtror6Pag" autocomplete="off" value="{{$busquedar6Pag}}" placeholder="Ingrese el número de datos desea visualizar">
                                            </div>

                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtro de fecha inicio</label>
                                                <input type="date" class="form-control" id="datePickerId2" name="filtror6FechaI" autocomplete="off" value="{{$busquedar6FechaI}}" placeholder="Ingrese el número de datos desea visualizar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtro de fecha final</label>
                                                <input type="date" class="form-control" id="datePickerId" name="filtror6FechaF" autocomplete="off" value="{{$busquedar6FechaF}}" placeholder="Ingrese el número de datos desea visualizar">
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
                                    <th style="color:#fff;">Nombres y apellidos </th>
                                    <th style="color:#fff;">Nombre de la madre</th>
                                    <th style="color:#fff;">DPI de la madre</th>
                                    <th style="color:#fff;">Nombre de familiar</th>
                                    <th style="color:#fff;">Parentesco</th>
                                    <th style="color:#fff;">Fecha de nacimiento</th>
                                </thead>
                                
                                <tbody>
                                    @if(count($infantes)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @else
                                    @foreach($infantes as $infant)
                                        <tr>
                                            <td style="display: none;">{{ $infant->idInfantes }}</td>
                                            <td>{{$infant->Nombres}}  {{$infant->Apellidos}}</td>
                                            <td>{{$infant->NombresPaciente}} {{$infant->ApellidosPaciente}}</td>
                                            <td>{{$infant->CUI}}</td>
                                            <td>{{$infant->datosfamiliares->NombresFamiliar}} {{$infant->datosfamiliares->ApellidosFamiliar}}</td>
                                            <td>{{$infant->Parentesco}}</td> 
                                            <td>{{ date('d-m-Y', strtotime($infant->FechaNacimiento))}}</td> 
                                                         
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>

                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection