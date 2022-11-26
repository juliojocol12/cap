@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ingreso de Primer Control Postparto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body"  onkeypress="return pulsar(event)">     
                                                                      
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                        {!! Form::open(array('route'=>'primercontrolpostparto.store', 'method'=>'POST')) !!}
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Nombre Servicio</label>
                                    {!! Form::text('NombreServicio', null, array('class'=>'form-control','maxlength'=>'45')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Dias Despues Parto</label>
                                    {!! Form::text('DiasDespuesParto', null, array('class'=>'form-control','maxlength'=>'6')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="" value="EstablecimientoSalud_id">Donde Atendio Parto</label>
                                    
                                    <select class="form-control" name="EstablecimientoSalud_id" maxlength="35">
                                        @foreach($Destablecimientos as $est)
                                        <option value="{{$est->idEstablecimientoSaludos }}">{{ $est->Nombre}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> 

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="" value="Personal_idD">Quien Atendio Parto</label>
                  
                                    <select class="form-control" name="Personal_idD" maxlength="35">
                                        @foreach($Dpersonales as $per)
                                        <option value="{{$per->idPersonal }}">
                                            {{$per->Nombre}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Herida Operatoria</label>
                                    {!! Form::text('HeridaOperatoria', null, array('class'=>'form-control','maxlength'=>'45')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Involucion Uterina</label>
                                    {!! Form::text('InvolucionUterina', null, array('class'=>'form-control','maxlength'=>'25')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Presion Arterial</label>
                                    {!! Form::text('PresionArterial', null, array('class'=>'form-control','maxlength'=>'20')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Frecuencia Cardiaca</label>
                                    {!! Form::text('FrecuenciaCardiaca', null, array('class'=>'form-control','maxlength'=>'20')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Temperatura</label>
                                    {!! Form::text('Temperatura', null, array('class'=>'form-control','maxlength'=>'10')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Examen de mamas</label>
                                    {!! Form::text('ExamenMamas', null, array('class'=>'form-control','maxlength'=>'75')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Lactancia Materna</label>
                                    {!! Form::text('LactanciaMaterna', null, array('class'=>'form-control','maxlength'=>'2')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Porque No Lactancia Materna</label>
                                    {!! Form::text('PorqueNoLactanciaMaterna', null, array('class'=>'form-control','maxlength'=>'45')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Examen Ginecologico</label>
                                    {!! Form::textarea('ExamenGinecologico', null, array('style'=>'background:#FCFCFC;height:90px;width:410px;border-color:#E3E3E3','maxlength'=>'300'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Diagnostico</label><br>
                                    {!! Form::textarea('Diagnostico', null, array('style'=>'background:#FCFCFC;height:90px;width:410px;border-color:#E3E3E3','maxlength'=>'200'))!!}                  
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Conducta Tratamiento</label><br>
                                    {!! Form::textarea('ConductaTratamiento', null, array('style'=>'background:#FCFCFC;height:90px;width:410px;border-color:#E3E3E3','maxlength'=>'200'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="" value="Personal_id">Encargado de llenado</label>
                  
                                    <select class="form-control" name="Personal_id" maxlength="35">
                                        @foreach($Dpersonales as $per)
                                        <option value="{{$per->idPersonal }}">
                                            {{$per->Nombre}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
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
