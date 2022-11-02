@extends('layouts.app')
@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">EDITAR FICHA CLINICA PRENATAL Y/O POSPARTO</h3>
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
                    {!! Form::model($fcprenatalpostparto, ['method' => 'PATCH', 'route'=> ['fcprenatalpostpartos.update', $fcprenatalpostparto->idFCPrenatalPostpartos ]]) !!}
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row ">
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de expediente</label>
                                        {!! Form::text('ExpedienteNo', null, array('class'=>'form-control','maxlength'=>'3', 'placeholder'=>'Ingrese el número', 'autocomplete'=>'off')) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha</label>
                                        {!! Form::date('Fecha', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="DatosPersonalesPacientes_id">Datos de Madre</label>

                                        <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="ingrese el cui de la madre" autocomplete="off">                                        
                                        <datalist id="filtroIDPacientes" name="DatosPersonalesPacientes_id">
                                            @foreach($datospacientes as $idpaciente)
                                            <option value="{{$idpaciente->idDatosPersonalesPacientes}}"> {{$idpaciente->CUI}}, {{$idpaciente->NombresPaciente}} {{$idpaciente->ApellidosPaciente}} </option>
                                            
                                            @endforeach

                                            
                                        </datalist>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="EstablecimientoSalud_id">Establecimiento</label>
                                        <select class="form-control" name="EstablecimientoSalud_id">
                                            @foreach($establecimientosaludos as $establecimiento)
                                            <option value="{{$establecimiento->idEstablecimientoSaludos}}" >{{ $establecimiento->Nombre}}, {{ $establecimiento->PuestoSalud}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>                                
                                
                            </div>
                                                
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h3 class="page__heading">Signos y sintomas de peligro</h3>
                            <div class="row ">
                            <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="HemorragiaVaginal">Hemorragia vaginal</label>
                                        <select class="form-control" name="HemorragiaVaginal">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="DolordeCabeza">Dolor de cabeza severo</label>
                                        <select class="form-control" name="DolordeCabeza">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="VisionBorrosa">Vision Borrosa</label>
                                        <select class="form-control" name="VisionBorrosa">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Convulsion">Convulsion</label>
                                        <select class="form-control" name="Convulsion">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="DolorAbdominal">Dolor abdominal severo (epigastralgia)</label>
                                        <select class="form-control" name="DolorAbdominal">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Convulsion">Convulsion</label>
                                        <select class="form-control" name="Convulsion">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Convulsion">Convulsion</label>
                                        <select class="form-control" name="Convulsion">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="PresionArterial">Presion Arterial</label>
                                        <select class="form-control" name="PresionArterial">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Fiebre">Fiebre</label>
                                        <select class="form-control" name="Fiebre">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="PresentacionesFetales">Presentaciones fetales anormales</label>
                                        <select class="form-control" name="PresentacionesFetales">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="MotivoConsulta">Motivo de consulta</label>
                                        <select class="form-control" name="MotivoConsulta">
                                        <option value="Embarazo">Embarazo</option>
                                        <option value="Parto">Parto</option>
                                        <option value="Postparto">Postparto</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Si refirio a la paciente registre manejo y estabilización</label>
                                        
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="RegistrodeReferencia" name="RegistrodeReferencia"  value="RegistrodeReferencia" style="height:60px; width: 100%; " maxlength="190">{{$fcprenatalpostparto->RegistrodeReferencia}}</textarea>
                                        </div>
                                    </div>                                       
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Historia de la enfermedad Actual</label>
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="HistoriaEnfermedadActual" name="HistoriaEnfermedadActual"  value="HistoriaEnfermedadActual" style="height:60px; width: 100%; " maxlength="200">{{$fcprenatalpostparto->HistoriaEnfermedadActual}}</textarea>
                                        </div>                                        
                                    </div>                                       
                                </div>


                             </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Antecedentes obstreticos</h3>
                        <div class="row ">
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            
                                    <div class="form-group">
                                        <label for="">Fecha de la última regla</label>
                                        {!! Form::date('FechaUltimaRegla', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de gestas</label>
                                        {!! Form::text('NoGestas', null, array('class'=>'form-control','maxlength'=>'2', 'placeholder'=>'Número de gestas', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de partos</label>
                                        {!! Form::text('Partos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de partos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Abortos</label>
                                        {!! Form::text('Aborto', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Abortos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="AbortoConsecutivo">Abortos consecutivo</label>
                                        <select class="form-control" name="AbortoConsecutivo">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de Legrado Intrauterino</label>
                                        {!! Form::text('NoLIU', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'LIU', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de nacidos vivos</label>
                                        {!! Form::text('NacidosVivos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de nacidos vivos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de nacidos muertos</label>
                                        {!! Form::text('NacidosMuertos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de nacidos muertos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de hijos vivos</label>
                                        {!! Form::text('HijosVivos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de hijos vivos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de hijos muertos</label>
                                        {!! Form::text('HijosMuertos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de hijos muertos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de cesareas</label>
                                        {!! Form::text('NoCesareas', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de cesareas', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="EmbarazoMultiples">Embarazo Multiples</label>
                                        <select class="form-control" name="EmbarazoMultiples">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de la último parto</label>
                                        {!! Form::date('FechaUltimoParto', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de niños(as) nacidos de 8 meses</label>
                                        {!! Form::text('NacidosAntesOchoMeses', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de niños(as) nacidos de 8 meses', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="PreEclampsia">Pre eclampsia</label>
                                        <select class="form-control" name="PreEclampsia">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="UltimoRNPesoCincolb">Último RN peso (-) 5 Lb y media</label>
                                        <select class="form-control" name="UltimoRNPesoCincolb">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="UltimoRNPesoSietelb">Último RN peso más 7 Lb 12 onz</label>
                                        <select class="form-control" name="UltimoRNPesoSietelb">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="DeteccionCancerCervix">Detección de cáncer de cérvix</label>
                                        <select class="form-control" name="DeteccionCancerCervix">
                                        <option value="Papanicolau">Papanicolau</option>
                                        <option value="IVAA">IVAA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha</label>
                                        {!! Form::date('FechaDeteccionCancer', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="ResultadoNormal">Resultado normal</label>
                                        <select class="form-control" name="ResultadoNormal">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="MetodoPlanificacionFamiliar">Utilizo algún método de planificación familiar</label>
                                        <select class="form-control" name="MetodoPlanificacionFamiliar">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Cual</label>
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="CualMetodoPlanificacionF" name="CualMetodoPlanificacionF"  value="CualMetodoPlanificacionF" style="height:60px; width: 100%; " maxlength="45">{{$fcprenatalpostparto->CualMetodoPlanificacionF}}</textarea>
                                        </div> 
                                    </div>                                       
                                </div>
                                </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Antecedentes medicos</h3>
                        <div class="row ">
                        <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="AsmaBronquial">Asma Bronquial</label>
                                        <select class="form-control" name="AsmaBronquial">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="HipertensionArterial">Hipertensión Arterial</label>
                                        <select class="form-control" name="HipertensionArterial">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Cancer">Cáncer</label>
                                        <select class="form-control" name="Cancer">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="ITS">ITS</label>
                                        <select class="form-control" name="ITS">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Chagas">Chagas</label>
                                        <select class="form-control" name="Chagas">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="TomaMedicamentos">Toma Medicamentos</label>
                                        <select class="form-control" name="TomaMedicamentos">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="TrastornoPiscoSocial">Trastorno PsicoSocial</label>
                                        <select class="form-control" name="TrastornoPiscoSocial">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="ViolenciaGenero">Violencia basada en género</label>
                                        <select class="form-control" name="ViolenciaGenero">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Diabetes">Diabetes</label>
                                        <select class="form-control" name="Diabetes">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Cardiopatia">Cardiopatia</label>
                                        <select class="form-control" name="Cardiopatia">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Tuberculosis">Tuberculosis</label>
                                        <select class="form-control" name="Tuberculosis">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Neuropatia">Neuropatia</label>
                                        <select class="form-control" name="Neuropatia">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="InfeccionesUrinarias">Infecciones Urinarias</label>
                                        <select class="form-control" name="InfeccionesUrinarias">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="ViolenciaInrtraFamiliar">Violencia InrtraFamiliar</label>
                                        <select class="form-control" name="ViolenciaInrtraFamiliar">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Tipo de Sangre</label>
                                        <select class="form-control" name="TipoSangre">
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Fuma">Fuma</label>
                                        <select class="form-control" name="Fuma">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="BebidasAlcoholicas">Ingiere bebidas alcohólicas</label>
                                        <select class="form-control" name="BebidasAlcoholicas">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="ConsumoDrogas">Consumo de drogas</label>
                                        <select class="form-control" name="ConsumoDrogas">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="AntecedentesVacunas">Antecedentes de vacuna Td</label>
                                        <select class="form-control" name="AntecedentesVacunas">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Dosis de Vacuna</label>
                                        {!! Form::text('DosisVacuna', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Dosis de Vacuna', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de Ultima Dosis</label>
                                        {!! Form::date('FechaUltimaDosis', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="SR">SR</label>
                                        <select class="form-control" name="SR">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>                                
                                
                                    
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Quirurgicos</label>
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="Quirurgicos" name="Quirurgicos"  value="Quirurgicos" style="height:60px; width: 100%; " maxlength="45">{{$fcprenatalpostparto->Quirurgicos}}</textarea>
                                        </div>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Otros Antecedentes</label>
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="OtrosAntecedentes" name="OtrosAntecedentes"  value="OtrosAntecedentes" style="height:60px; width: 100%; " maxlength="45">{{$fcprenatalpostparto->OtrosAntecedentes}}</textarea>
                                        </div>
                                    </div>      
                                </div>

                                     
                                </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="{{ route('fcprenatalpostpartos.index') }}" class="btn btn-danger mr-3">Cancelar</a>
                    </div>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection