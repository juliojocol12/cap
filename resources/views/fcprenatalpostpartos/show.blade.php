@extends('layouts.app')
@section('title')
    Datos del expediente no. {{$fcprenatalpostparto->datospersonalespacientes->Numerodireccion}}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos del expediente no. {{$fcprenatalpostparto->datospersonalespacientes->Numerodireccion}} </h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    {{-- Validacion para ingreso de campos --}}
                        @if($errors->any())
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                            @foreach ($errors->all() as $error)
                                <span classs="badge badge-danger">{{$error}}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <a href="{{ route('fcprenatalpostpartos.index') }}" class="btn btn-success mr-3">Volver</a>
                            <a href="{{ route('fcprenatalpostpartos.edit', $fcprenatalpostparto->idFCPrenatalPostpartos) }}" class="btn btn-info mr-3">Editar</a>

                            

                            
                    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Datos de expediente</h4>
                            <div class="row ">
                                <div class="col-xs-6 col-sm-6 col-md-1">
                                    <div class="form-group">
                                        <label for="">Expediente</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->datospersonalespacientes->Numerodireccion}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">DPI</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->datospersonalespacientes->CUI}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Fecha}}" disabled>
                                    </div>                                       
                                </div>
                            </div>    

                        </div>                    
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Datos de centro de atención</h4>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->establecimientosaludos->Nombre}}" disabled>
                                    </div>                                       
                                </div>

                            </div>    
                        </div>                    
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Datos generales de la paciente</h4>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->datospersonalespacientes->NombresPaciente}} {{$fcprenatalpostparto->datospersonalespacientes->ApellidosPaciente}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->datospersonalespacientes->FechaNaciemientoPaciente}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->datospersonalespacientes->Descripciondireccion}} {{$fcprenatalpostparto->datospersonalespacientes->Grupodireccion}} {{$fcprenatalpostparto->datospersonalespacientes->Numerodireccion}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de teléfono</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->datospersonalespacientes->Telefono}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de celular</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->datospersonalespacientes->Celular}}" disabled>
                                    </div>                                       
                                </div>

                            </div>    
                        </div>                    
                    </div>

                    @include('fcprenatalpostpartos.show.signosysintomas')

                    <div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Si refirió a la paciente registre manejo y estabilización</h4>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->RegistrodeReferencia}}" disabled>
                                    </div>                                       
                                </div>

                            </div>    
                        </div>                    
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Motivo de consulta</h4>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->MotivoConsulta}}" disabled>
                                    </div>                                       
                                </div>

                            </div>    
                        </div>                    
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Historia de la enfermedad actual</h4>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->HistoriaEnfermedadActual}}" disabled>
                                    </div>                                       
                                </div>

                            </div>    
                        </div>                    
                    </div>

                    @include('fcprenatalpostpartos.show.obstretico')
                    @include('fcprenatalpostpartos.show.medico')

                    <a href="{{ route('fcprenatalpostpartos.index') }}" class="btn btn-success mr-3">Volver</a>
                            <a href="{{ route('fcprenatalpostpartos.edit', $fcprenatalpostparto->idFCPrenatalPostpartos) }}" class="btn btn-info mr-3">Editar</a>


                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection