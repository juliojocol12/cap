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
                            <h1>Mujeres en el período puerperio</h1>

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('reportes.r5') }}" method="GET">
                                        
                                        <div class="form-row">
                                            <div class="col-sm-3 my-1">
                                                <label for="">¿Cuántos datos desea visualizar?</label>
                                                <input type="text" class="form-control" name="filtror5Pag" autocomplete="off" value="{{$busquedar5Pag}}" placeholder="Ingrese el número de datos desea visualizar">
                                            </div>
                                            

                                        </div> 

                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('reportes.r5') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                            </div>
                                        </div>                                  
                                        
                                    </form>
                                </div>
                            </div>

                            <div class="row">
                                <form action="{{ route('posparto.pdf5') }}" method="GET">
                                    <div class="d-none">
                                        <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por número de control</label>
                                                <input type="text" class="form-control" name="filtror5Pag" autocomplete="off" value="{{$busquedar5Pag}}" placeholder="Ingrese el número de datos a buscar">
                                            </div>
                                    </div>
                                    <div class="col-sm-4 my-1">
                                        <input formtarget="_blank" type="submit"  class="btn btn-warning" value="Descargar reporte">
                                    </div>
                                </form>
                            </div>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="color:#fff;">Número de expediente</th>
                                    <th style="color:#fff;">Número de control</th>
                                    <th style="color:#fff;">Semanas despúes del parto</th>
                                    <th style="color:#fff;">Fecha de visita</th>
                                    <th style="color:#fff;">Nombre</th>
                                </thead>

                                <tbody>
                                    @foreach($controlpospartos as $controlpos)
                                        <tr>
                                            <td align="center">{{$controlpos->Numerodireccion}}</td>
                                            <td align="center">{{$controlpos->NoControl}}</td>
                                            <td align="center">{{$controlpos->SemanasDespuesParto}}</td>
                                            <td align="center">{{ date('d-m-Y', strtotime($controlpos->FechaVisita))}}</td>
                                            <td align="center">{{$controlpos->NombresPaciente}} {{$controlpos->ApellidosPaciente}}</td>
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