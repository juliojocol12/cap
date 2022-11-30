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
                            <h3>Mujeres embarazadas</h3>
                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('reportes.r4') }}" method="GET">
                                        <div class="form-row">
                                            
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por nombres</label>
                                                <input type="text" class="form-control" name="filtroNombre" autocomplete="off" value="{{$busquedaNombre}}" placeholder="Ingrese el nombre de la paciente a buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por apellidos</label>
                                                <input type="text" class="form-control" name="filtroApellido" autocomplete="off" value="{{$busquedaApellido}}" placeholder="Ingrese el apellido de la paciente a buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por fecha</label>
                                                <input type="text" class="form-control" name="filtro" autocomplete="off" value="{{$busqueda}}" placeholder="Ingrese la fecha para buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por DPI</label>
                                                <input type="text" class="form-control" name="filtroDPI" autocomplete="off" value="{{$busquedaDPI}}" placeholder="Ingrese el DPI a buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por profesión</label>
                                                <input type="text" class="form-control" name="filtroProfesion" autocomplete="off" value="{{$busquedaProfesion}}" placeholder="Ingrese por profesión a buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por pueblo</label>
                                                <input type="text" class="form-control" name="filtroPueblo" autocomplete="off" value="{{$busquedaPueblo}}" placeholder="Ingrese por profesión a buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por estado civil</label>
                                                <input type="text" class="form-control" name="filtroEstadoCivil" autocomplete="off" value="{{$busquedaEstadoCivil}}" placeholder="Ingrese por estado civil a buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por tipo de sangre</label>
                                                <input type="text" class="form-control" name="filtroSangre" autocomplete="off" value="{{$busquedaSangre}}" placeholder="Ingrese por tipo de sangre a buscar">
                                            </div>
                                            
                                        </div>
                                         
                                        <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('reportes.r4') }}" class="btn btn-danger mr-3">Borrar búsqueda</a>
                                            </div>
                                    </form>
                                </div>

                            </div>

                        
                            <div align="right">
                                <form action="{{ route('datospersonalespacientes.pdf4') }}" method="GET">
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
                                                <input type="date" class="form-control" name="filtro" autocomplete="off" value="{{$busqueda}}" placeholder="Ingrese la fecha para buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <input type="text" class="form-control" name="filtroDPI" autocomplete="off" value="{{$busquedaDPI}}" placeholder="Ingrese el DPI para buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por profesión</label>
                                                <input type="text" class="form-control" name="filtroProfesion" autocomplete="off" value="{{$busquedaProfesion}}" placeholder="Ingrese por profesión a buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por pueblo</label>
                                                <input type="text" class="form-control" name="filtroPueblo" autocomplete="off" value="{{$busquedaPueblo}}" placeholder="Ingrese por profesión a buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por estado civil</label>
                                                <input type="text" class="form-control" name="filtroEstadoCivil" autocomplete="off" value="{{$busquedaEstadoCivil}}" placeholder="Ingrese por estado civil a buscar">
                                            </div>
                                            <div class="col-sm-2 my-1">
                                                <label for="">Filtrar por tipo de sangre</label>
                                                <input type="text" class="form-control" name="filtroSangre" autocomplete="off" value="{{$busquedaSangre}}" placeholder="Ingrese por tipo de sangre a buscar">
                                            </div>
                                    </div>
                                    
                                </form>
                            </div>
                            <div class="col-sm-4 my-1">
                                <input formtarget="_blank" type="submit"  class="btn btn-warning" value="Descargar reporte">
                            </div>
                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="color:#fff;">Nombres</th>
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">Fecha nacimiento</th>
                                    <th style="color:#fff;">DPI</th>
                                    <th style="color:#fff;">Profesión</th>
                                    <th style="color:#fff;">Dirección</th>
                                    <th style="color:#fff;">Municipio</th>
                                    <th style="color:#fff;">Celular</th>
                                    <th style="color:#fff;">Pueblo</th>
                                    <th style="color:#fff;">Estado civil</th>
                                    <th style="color:#fff;">Peso</th>
                                    <th style="color:#fff;">Tipo sanguíneo</th>
                                    <th style="color:#fff;">Migrante</th>
                                </thead>

                                <tbody>
                                    @foreach($datospersonalespacientes as $paciente)
                                        <tr "table-active">
                                      
                                            <td>{{$paciente->NombresPaciente}}</td>
                                            <td>{{$paciente->ApellidosPaciente}}</td> 
                                            <td>{{$paciente->FechaNaciemientoPaciente}}</td> 
                                            <td>{{$paciente->CUI}}</td> 
                                            <td>{{$paciente->ProfesionOficio}}</td> 
                                            <td>{{$paciente->Descripciondireccion}}</td> 
                                            <td>{{$paciente->Municipiodep}}</td>                                    
                                            <td>{{$paciente->Celular}}</td>
                                            <td>{{$paciente->Nombre}}</td>
                                            <td>{{$paciente->EstadoCivil}}</td>
                                            <td>{{$paciente->Peso}}</td>
                                            <td>{{$paciente->TipoSanguineo}}</td>
                                            <td>{{$paciente->Migrante}}</td>
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