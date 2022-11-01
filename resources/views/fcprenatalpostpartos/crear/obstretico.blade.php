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

                                <div class="col-xs-1 col-sm-6 col-md-2">
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
                                        {!! Form::textarea('CualMetodoPlanificacionF', null, array('style'=>'background:#FCFCFC;height:90px;width:400px;border-color:#E3E3E3','maxlength'=>'45')) !!}
                                    </div>                                       
                                </div>
                                </div>
                        </div>
                    </div>