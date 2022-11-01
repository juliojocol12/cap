@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos del expediente No. {{$fcprenatalpostparto->ExpedienteNo}} </h3>
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
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->ExpedienteNo}}" disabled>
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
                            <h4 class="page__heading">Datos de expediente</h4>
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
                            <h4 class="page__heading">Datos generales del paciente</h4>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-2">
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
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->datospersonalespacientes->Domicilio}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->datospersonalespacientes->Telefono}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Celular</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->datospersonalespacientes->Celular}}" disabled>
                                    </div>                                       
                                </div>

                            </div>    
                        </div>                    
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Evaluación de signos y síntomas de peligro</h4>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Hemorragia Vaginal</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->HemorragiaVaginal}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Dolor de cabeza severo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->DolordeCabeza}}" disabled>
                                    </div>                                       
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Vision Borrosa</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->VisionBorrosa}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Convulsion</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Convulsion}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Dolor Abdominal severo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->DolorAbdominal}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Presion Arterial alta</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->PresionArterial}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fiebre</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Fiebre}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Presentaciones Fetales</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->PresentacionesFetales}}" disabled>
                                    </div>                                       
                                </div>

                            </div>    
                        </div>                    
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Refirio a la paciente de registo manejo y estabilizacion</h4>
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

                    <div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Antecedentes: Gineco/Obstretico</h4>

                            <h5 class="page__heading"></h5>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Fecha de ultima regla</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->FechaUltimaRegla}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de Gestas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->NoGestas}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de Partos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Partos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de Partos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Partos}}" disabled>
                                    </div>                                       
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de Abortos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Aborto}}" disabled>
                                    </div>                                       
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">AbortoConsecutivo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->AbortoConsecutivo}}" disabled>
                                    </div>                                       
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de LIU</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->NoLIU}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de NacidosVivos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->NacidosVivos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de NacidosMuertos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->NacidosMuertos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de HijosVivos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->HijosVivos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de HijosMuertos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->HijosMuertos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de NoCesareas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->NoCesareas}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">EmbarazoMultiples</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->EmbarazoMultiples}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">FechaUltimoParto</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->FechaUltimoParto}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Número de Nacidos AntesOchoMeses</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->NacidosAntesOchoMeses}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">PreEclampsia</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->PreEclampsia}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">UltimoRNPesoCincolb</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->UltimoRNPesoCincolb}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">UltimoRNPesoSietelb</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->UltimoRNPesoSietelb}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">DeteccionCancerCervix</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->DeteccionCancerCervix}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">FechaDeteccionCancer</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->FechaDeteccionCancer}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">ResultadoNormal</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->ResultadoNormal}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">MetodoPlanificacionFamiliar</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->MetodoPlanificacionFamiliar}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Cual</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->CualMetodoPlanificacionF}}" disabled>
                                    </div>                                       
                                </div>
                            </div>    
                        </div>                    
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Antecedentes: Medicos</h4>

                            <h5 class="page__heading"></h5>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">AsmaBronquial</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->AsmaBronquial}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">HipertensionArterial</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->HipertensionArterial}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Cancer</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Cancer}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">ITS</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->ITS}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Chagas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Chagas}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">TomaMedicamentos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->TomaMedicamentos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">TrastornoPiscoSocial</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->TrastornoPiscoSocial}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">ViolenciaGenero</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->ViolenciaGenero}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Diabetes</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Diabetes}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Cardiopatia</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Cardiopatia}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Tuberculosis</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Tuberculosis}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Neuropatia</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Neuropatia}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">InfeccionesUrinarias</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->InfeccionesUrinarias}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">TipoSangre</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->TipoSangre}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">Fuma</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Fuma}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">BebidasAlcoholicas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->BebidasAlcoholicas}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">ConsumoDrogas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->ConsumoDrogas}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">AntecedentesVacunas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->AntecedentesVacunas}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">DosisVacuna</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->DosisVacuna}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">FechaUltimaDosis</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->FechaUltimaDosis}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">SR</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->SR}}" disabled>
                                    </div>                                       
                                </div>

                                

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <label for="">Quirurgicos</label>
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->Quirurgicos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <label for="">OtrosAntecedentes</label>
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcprenatalpostparto->OtrosAntecedentes}}" disabled>
                                    </div>                                       
                                </div>


                            </div>    
                        </div>                    
                    </div>

                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection