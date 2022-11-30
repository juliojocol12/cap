@extends('layouts.app')
@section('title')
    Reporte de abortos
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Reportes</h3>
        </div>
        <div class="section-body">
            <a href="{{ route('reportes.index') }}" class="btn btn-success mr-3">Volver</a>
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">

                            <h3>Mujeres en estado de alto riesgo</h3>
                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('reportes.r3') }}" method="GET">
                                        <div class="col-sm-4 my-1">
                                            <input type="submit" class="btn btn-primary" value="Buscar">
                                            <a href="{{ route('reportes.r3') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>    
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por Nombres</label>
                                                <input type="text" class="form-control" name="filtroNombre" autocomplete="off" value="{{$busquedaNombre}}" placeholder="Ingrese el nombre de la paciente">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por Apellidos</label>
                                                <input type="text" class="form-control" name="filtroApellido" autocomplete="off" value="{{$busquedaApellido}}" placeholder="Ingrese el apellido de la paciente">
                                            </div>
                                            <div class="col-sm-2 my-1">    
                                                <label for="">Fecha inicial</label>                                        
                                                <input type="date" class="form-control" name="filtro" autocomplete="off" value="{{$busqueda}}" placeholder="Ingrese la fecha inicial">
                                            </div>
                                            <div class="col-sm-2 my-1">    
                                                <label for="">Fecha final</label>                                        
                                                <input type="date" class="form-control" name="filtrofinal" autocomplete="off" value="{{$busquedaFinal}}" placeholder="Ingrese la fecha final">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por DPI</label>
                                                <input type="text" class="form-control" name="filtroDPI" autocomplete="off" value="{{$busquedaDPI}}" placeholder="Ingrese el DPI a buscar">
                                            </div>
                                        </div>
                                            <div class="col-sm-4 my-1">
                                                <input formtarget="_blank" type="submit"  class="btn btn-warning" value="Descargar reporte">
                                            </div>                                                                                                                       
                                    </form>
                                </div>
                                <div align="right">
                                    <form action="{{ route('altoriesgo.pdf3') }}" method="GET">
                                        <div class="d-none">
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por Nombres</label>
                                                <input type="text" class="form-control" name="filtroNombre" autocomplete="off" value="{{$busquedaNombre}}" placeholder="Ingrese el nombre de la paciente a buscar">
                                            </div> 
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por Apellidos</label>
                                                <input type="text" class="form-control" name="filtroApellido" autocomplete="off" value="{{$busquedaApellido}}" placeholder="Ingrese el apellido de la paciente a buscar">
                                            </div>    
                                            <div class="col-sm-2 my-1">                                            
                                                <input type="text" class="form-control" name="filtro" autocomplete="off" value="{{$busqueda}}" placeholder="Ingrese la fecha del aborto">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <input type="text" class="form-control" name="filtroDPI" autocomplete="off" value="{{$busquedaDPI}}" placeholder="Ingrese el DPI para buscar">
                                            </div>
                                        </div>
                                 </form>
                                </div>
                                <table class="table  table-striped mt-2 table-responsive">
                                    <thead style="background-color: #6777ef;">
                                        <th style="color:#fff;">Nombres</th>
                                        <th style="color:#fff;">Apellidos</th>
                                        <th style="color:#fff;">Celular</th>
                                        <th style="color:#fff;">CUI</th>
                                        <th style="color:#fff;">Dirección</th>
                                        <th style="color:#fff;">Municipio</th>
                                        <th style="color:#fff;">Pueblo</th>
                                        <th style="color:#fff;">Estado civil</th>
                                        <th style="color:#fff;">Tipo sanguíneo</th>
                                    </thead>
                                    <tbody>
                                        @foreach($datospersonalespacientes as $paciente)
                                            <tr "table-active">
                                                <td>{{$paciente->NombresPaciente}}</td>
                                                <td>{{$paciente->ApellidosPaciente}}</td> 
                                                <td>{{$paciente->Celular}}</td>
                                                <td>{{$paciente->CUI}}</td> 
                                                <td>{{$paciente->Descripciondireccion}}</td> 
                                                <td>{{$paciente->Municipiodep}}</td>                                    
                                                <td>{{$paciente->Nombre}}</td>
                                                <td>{{$paciente->EstadoCivil}}</td>
                                                <td>{{$paciente->TipoSanguineo}}</td>
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