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

                            <h3>Abortos</h3>
                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('reportes.r10') }}" method="GET">
                                        
                                          <div class="form-row">
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por Nombres</label>
                                                <input type="text" class="form-control" name="filtroNombre" autocomplete="off" value="{{$busquedaNombre}}" placeholder="Ingrese el nombre de la paciente a buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por Apellidos</label>
                                                <input type="text" class="form-control" name="filtroApellido" autocomplete="off" value="{{$busquedaApellido}}" placeholder="Ingrese el apellido de la paciente a buscar">
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
                                                <input type="text" class="form-control" name="filtroDPI" autocomplete="off" value="{{$busquedaDPI}}" placeholder="Ingrese el DPI para buscar">
                                            </div>         
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('reportes.r10') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>    
                                            </div>                                                                                                             
                                    </form>
                                </div>
                                <div align="row">
                                    <form action="{{ route('abortos.pdf10') }}" method="GET">
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
                                        <div class="col-sm-4 my-1">
                                            <input formtarget="_blank" type="submit"  class="btn btn-warning" value="Descargar reporte">
                                        </div>
                                    </form>
                                </div>
                                <table class="table  table-striped mt-2 table-responsive">
                                    <thead style="background-color:#6777ef">                                     
                                        <th style="display: none;">ID</th>
                                        <th style="color:#fff;">Nombre de la paciente</th>
                                        <th style="color:#fff;">DPI</th>
                                        <th style="color:#fff;">Antecedentes</th>   
                                        <th style="color:#fff;">Descripción</th>                                 
                                        <th style="color:#fff;">Fecha de aborto</th>                                                             
                                    </thead>
                                    <tbody>
                                        @if(count($datospersonalespacientes)<=0)
                                            <tr>
                                                <td colspan="8">No hay resultados</td>
                                            </tr>
                                        @else
                                        
                                        @foreach ($datospersonalespacientes as $aborto)
                                            <tr>
                                                
                                                <td style="display: none;">{{ $aborto->idAbortos }}</td>  
                                                
                                                <td>{{ $aborto->NombresPaciente }} {{ $aborto->ApellidosPaciente }}</td>
                                                <td>{{ $aborto->CUI }}</td>
                                                <td>{{ $aborto->Antecedente }}</td>
                                                <td>{{ $aborto->Descripcion }}</td>
                                                <td>{{ $aborto->FechaAborto }}</td>
                                                
                                                              
                                            </tr>
                                        
                                            @include('abortos.delete')
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