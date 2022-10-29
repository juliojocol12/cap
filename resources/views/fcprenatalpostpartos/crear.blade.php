@extends('layouts.app')
@section('content')
    <section class="section">
        
        <div class="section-header">
            <h6 class="page__heading">Ingreso de ficha</h6>
        </div>
        <div class="section-body">
        <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
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

                            '','','DatosPersonalesPacientes_id','EstablecimientoSalud_id','','','','','','','','','','','','AnteObstetricos_id','AntecedentesMedicos_id',

                            {!! Form::open(array('route'=>'fcprenatalpostpartos.store', 'method'=>'POST')) !!}
                            <div class="row ">
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de expediente</label>
                                        {!! Form::text('ExpedienteNo', null, array('class'=>'form-control', 'placeholder'=>'Ingrese el número', 'autocomplete'=>'off')) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha</label>
                                        {!! Form::date('Fecha', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                {{--  Ingreso de sigono y sintomas de peligro   --}}
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

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Si refirio a la paciente registre manejo y estabilización</label>
                                        {!! Form::text('RegistrodeReferencia', null, array('class'=>'form-control', 'placeholder'=>'Si refirio a la paciente registre manejo y estabilización', 'autocomplete'=>'off')) !!}
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
                                        <label for="">Historia de la enfermedad Actual</label>
                                        {!! Form::text('HistoriaEnfermedadActual', null, array('class'=>'form-control', 'placeholder'=>'Si refirio a la paciente registre manejo y estabilización', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <button type="submit" class="btn btn btn-danger" href="infantes.index">Cancelar</button>
                                </div>
                                
                            </div>
                            {!! Form::close() !!}                    
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </section>
    
@endsection