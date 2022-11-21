<div class="card"> 
                        <div class="card-body">
                        <h3 class="page__heading">Antecedentes obstéticos</h3>
                        <div class="row ">
                                <div class="col-xs-6 col-sm-6 col-md-3">
                            
                                    <div class="form-group">
                                        <label for="">Fecha de la última regla (*)</label>
                                        {!! Form::date('FechaUltimaRegla', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de gestas (*)</label>
                                        
                                        {!! Form::text('NoGestas', null, array('value'=>'0','class'=>'form-control','maxlength'=>'2', 'placeholder'=>'Ingrese número de gestas', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de partos (*)</label>
                                        {!! Form::text('Partos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Ingrese número de partos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Cantidad de abortos (*)</label>
                                        {!! Form::text('Aborto', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Ingrese número de abortos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="AbortoConsecutivo">Abortos consecutivos (*)</label>
                                        <select class="form-control" name="AbortoConsecutivo">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de legrado intrauterino (*)</label>
                                        {!! Form::text('NoLIU', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Ingrese número de LIU', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de hijos nacidos vivos (*)</label>
                                        {!! Form::text('NacidosVivos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Ingrese número de hijos nacidos vivos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de hijos nacidos muertos (*)</label>
                                        {!! Form::text('NacidosMuertos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Ingrese número de nacidos muertos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de hijos vivos (*)</label>
                                        {!! Form::text('HijosVivos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Ingrese número de hijos vivos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de hijos muertos (*)</label>
                                        {!! Form::text('HijosMuertos', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Ingrese número de hijos muertos', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de cesáreas (*)</label>
                                        {!! Form::text('NoCesareas', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Ingrese número de cesáreas', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="EmbarazoMultiples">Embarazos múltiples (*)</label>
                                        <select class="form-control" name="EmbarazoMultiples">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha del último parto (*)</label>
                                        {!! Form::date('FechaUltimoParto', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de niños(as) nacidos de 8 meses (*)</label>
                                        {!! Form::text('NacidosAntesOchoMeses', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Ingrese número de niños(as) nacidos de 8 meses', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="PreEclampsia">Preeclampsia (*)</label>
                                        <select class="form-control" name="PreEclampsia">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="UltimoRNPesoCincolb">Último RN peso (-) 5 Lb y media (*)</label>
                                        <select class="form-control" name="UltimoRNPesoCincolb">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="UltimoRNPesoSietelb">Último RN peso más 7 Lb 12 onz (*)</label>
                                        <select class="form-control" name="UltimoRNPesoSietelb">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="DeteccionCancerCervix">Detección de cáncer de cérvix</label>
                                        <select class="form-control" name="DeteccionCancerCervix">
                                        <option value="Papanicolau">Papanicolau</option>
                                        <option value="IVAA">IVAA</option>
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
                                        <select class="form-control" name="ResultadoNormal">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="MetodoPlanificacionFamiliar">¿Utilizó algún método de planificación familiar? (*)</label>
                                        <select class="form-control" name="MetodoPlanificacionFamiliar">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">¿Cúal fue el mótodo que utilizó?</label>
                                        <div class="form-outline w-100 mb-4">

                                            <textarea class="form-control" id="CualMetodoPlanificacionF" name="CualMetodoPlanificacionF" style="height:90px; width: 100%; " maxlength="45" placeholder="Describa cúal fue el método de planificación que utilizó"></textarea>

                                        </div>
                                    </div>                                       
                                </div>

                                </div>
                        </div>
                    </div>