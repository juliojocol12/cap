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

                            <h1>Vacunas infantes</h1>

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('reportes.r8') }}" method="GET">
                                        
                                        <div class="form-row">
                                            <div class="col-sm-3 my-1">
                                                <label for="">Filtro por nombre</label>
                                                <input type="text" class="form-control" name="filtror8Nombre" autocomplete="off" value="{{$busquedar8Nombre}}" placeholder="Ingrese el nombre del infante">
                                            </div>

                                            <div class="col-sm-3 my-1">
                                                <label for="">Filtro por apellido</label>
                                                <input type="text" class="form-control" name="filtror8Apellido" autocomplete="off" value="{{$busquedar8Apellido}}" placeholder="Ingrese el apellido del infante">
                                            </div>
                                            
                                        </div>    
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('reportes.r8') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>

                            <div class="row">
                                <form action="{{ route('vacunainfante.pdf8') }}" method="GET">
                                    <div class="d-none">
                                            <div class="col-sm-3 my-1">
                                                <label for="">Filtro por nombre</label>
                                                <input type="text" class="form-control" name="filtror8Nombre" autocomplete="off" value="{{$busquedar8Nombre}}" placeholder="Ingrese el nombre del infante">
                                            </div>

                                            <div class="col-sm-3 my-1">
                                                <label for="">Filtro por apellido</label>
                                                <input type="text" class="form-control" name="filtror8Apellido" autocomplete="off" value="{{$busquedar8Apellido}}" placeholder="Ingrese el apellido del infante">
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
                                    <th style="color:#fff;">Género </th>                             
                                    <th style="color:#fff;">Vacuna</th>
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
                                            <td>{{$infant->Genero}}</td>
                                            <td>{{$infant->NombreVacuna}}</td>
                                        </tr>
                                    @endforeach


                                    @foreach($infantesinfluenzas as $infantesinfluenza)
                                        <tr>
                                            <td style="display: none;">{{ $infantesinfluenza->idInfantes }}</td>
                                            <td>{{$infantesinfluenza->Nombres}}  {{$infantesinfluenza->Apellidos}}</td>
                                            <td>{{$infantesinfluenza->Genero}}</td>
                                            <td>{{$infantesinfluenza->NombreVacuna}}</td>
                                        </tr>
                                    @endforeach

                                    @foreach($infantesCovids as $infantesCovid)
                                        <tr>
                                            <td style="display: none;">{{ $infantesCovid->idInfantes }}</td>
                                            <td>{{$infantesCovid->Nombres}}  {{$infantesCovid->Apellidos}}</td>
                                            <td>{{$infantesCovid->Genero}}</td>
                                            <td>{{$infantesCovid->NombreVacuna}}</td>
                                        </tr>
                                    @endforeach

                                    @foreach($infantesTdAps as $infantesTdAp)
                                        <tr>
                                            <td style="display: none;">{{ $infantesTdAp->idInfantes }}</td>
                                            <td>{{$infantesTdAp->Nombres}}  {{$infantesTdAp->Apellidos}}</td>
                                            <td>{{$infantesTdAp->Genero}}</td>
                                            <td>{{$infantesTdAp->NombreVacuna}}</td>
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