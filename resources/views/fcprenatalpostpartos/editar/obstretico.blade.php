<div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Antecedentes obstreticos</h3>
                        <div class="row ">
                                <div class="col-xs-6 col-sm-6 col-md-3">
                            
                                    <div class="form-group">
                                        <label for="">Fecha de la última regla (*)</label>
                                        {!! Form::date('FechaUltimaRegla', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de gestas</label>
                                        
                                        {!! Form::text('NoGestas', null, array('value'=>'0','class'=>'form-control','maxlength'=>'2', 'placeholder'=>'Número de gestas', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de partos</label>
                                        {!! Form::text('Partos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de partos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Abortos</label>
                                        {!! Form::text('Aborto', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Abortos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="AbortoConsecutivo">Abortos consecutivo</label>
                                        <select class="form-control" name="AbortoConsecutivo" value="{{$fcprenatalpostparto->AbortoConsecutivo}}">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de Legrado Intrauterino (*)</label>
                                        {!! Form::text('NoLIU', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'LIU', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de nacidos vivos</label>
                                        {!! Form::text('NacidosVivos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de nacidos vivos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de nacidos muertos</label>
                                        {!! Form::text('NacidosMuertos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de nacidos muertos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de hijos vivos</label>
                                        {!! Form::text('HijosVivos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de hijos vivos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de hijos muertos</label>
                                        {!! Form::text('HijosMuertos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de hijos muertos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de cesareas</label>
                                        {!! Form::text('NoCesareas', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de cesareas', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="EmbarazoMultiples">Embarazo Multiples</label>
                                        <select class="form-control" name="EmbarazoMultiples" value="{{$fcprenatalpostparto->EmbarazoMultiples}}">
                                        <option select">{{$fcprenatalpostparto->EmbarazoMultiples}}</option>
                                        @if ($fcprenatalpostparto->EmbarazoMultiples === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de la último parto</label>
                                        {!! Form::date('FechaUltimoParto', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de niños(as) nacidos de 8 meses</label>
                                        {!! Form::text('NacidosAntesOchoMeses', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Número de niños(as) nacidos de 8 meses', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="PreEclampsia">Pre eclampsia</label>
                                        <select class="form-control" name="PreEclampsia" value="{{$fcprenatalpostparto->PreEclampsia}}">
                                        <option select">{{$fcprenatalpostparto->PreEclampsia}}</option>
                                        @if ($fcprenatalpostparto->PreEclampsia === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="UltimoRNPesoCincolb">Último RN peso (-) 5 Lb y media</label>
                                        <select class="form-control" name="UltimoRNPesoCincolb" value="{{$fcprenatalpostparto->UltimoRNPesoCincolb}}">
                                        <option select">{{$fcprenatalpostparto->UltimoRNPesoCincolb}}</option>
                                        @if ($fcprenatalpostparto->UltimoRNPesoCincolb === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="UltimoRNPesoSietelb">Último RN peso más 7 Lb 12 onz</label>
                                        <select class="form-control" name="UltimoRNPesoSietelb" value="{{$fcprenatalpostparto->UltimoRNPesoSietelb}}">
                                        <option select">{{$fcprenatalpostparto->UltimoRNPesoSietelb}}</option>
                                        @if ($fcprenatalpostparto->UltimoRNPesoSietelb === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="DeteccionCancerCervix">Detección de cáncer de cérvix</label>
                                        <select class="form-control" name="DeteccionCancerCervix" value="{{$fcprenatalpostparto->DeteccionCancerCervix}}">
                                        <option select">{{$fcprenatalpostparto->DeteccionCancerCervix}}</option>
                                        @if ($fcprenatalpostparto->DeteccionCancerCervix === 'Papanicolau')
                                            <option value="IVAA">IVAA</option>
                                        @else
                                            <option value="Papanicolau">Papanicolau</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de detección</label>
                                        {!! Form::date('FechaDeteccionCancer', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="ResultadoNormal">Resultado normal</label>
                                        <select class="form-control" name="ResultadoNormal" value="{{$fcprenatalpostparto->ResultadoNormal}}">
                                        <option select">{{$fcprenatalpostparto->ResultadoNormal}}</option>
                                        @if ($fcprenatalpostparto->ResultadoNormal === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="MetodoPlanificacionFamiliar">Utilizo algún método de planificación familiar</label>
                                        <select class="form-control" name="MetodoPlanificacionFamiliar" value="{{$fcprenatalpostparto->MetodoPlanificacionFamiliar}}">
                                        <option select">{{$fcprenatalpostparto->MetodoPlanificacionFamiliar}}</option>
                                        @if ($fcprenatalpostparto->MetodoPlanificacionFamiliar === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Cual fue el mótodo que utilizo</label>
                                        <div class="form-outline w-100 mb-4">

                                            <textarea class="form-control" id="CualMetodoPlanificacionF" name="CualMetodoPlanificacionF" style="height:90px; width: 100%; " maxlength="45" placeholder="Describa cual fue el método de planificación que utlizo">{{$fcprenatalpostparto->CualMetodoPlanificacionF}}</textarea>

                                        </div>
                                    </div>                                       
                                </div>

                                </div>
                        </div>
                    </div>