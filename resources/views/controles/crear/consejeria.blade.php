<div class="card">
                    <div class="card-body">
                        <h3 class="page__heading">CONSEJERIA</h3>
                        <div class="row ">
                        <div class="col-xs-1 col-sm-6 col-md-3">
                                     <div class="form-group">
                                            <label for="AlimentacionEmbarazo">Alimentación sobre el embarazo</label>
                                                <select class="form-control" name="AlimentacionEmbarazo">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescripcionAlimentacionEmbarazo', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="CuidadosPersonales">Cuidados Personales (promover el descanso, evitar uso alcohol y cigarro).</label>
                                                <select class="form-control" name="CuidadosPersonales">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescripcionCuidadosPersonales', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="SintomasComunes">Síntomas comunes (acidez, estreñimiento, náuseas y vómitos, lumbalgia, varices, edema)</label>
                                                <select class="form-control" name="SintomasComunes">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescipcionSintomasComunes', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>
                  
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="SenalesPeligro">Señales de peligro en el embarazo</label>
                                                <select class="form-control" name="SenalesPeligro">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescripcionSenalesPeligro', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>  

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="ConsejeriaPrePostVIH">Consejería pre/pos prueba VIH</label>
                                                <select class="form-control" name="ConsejeriaPrePostVIH">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescripcionConsejeriaPrePostVIH', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div> 

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="PlanParto">Plan de parto (ahorro, transporte, preparar insumos)</label>
                                                <select class="form-control" name="PlanParto">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescrpcionPlanParto', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>   

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="PlanEmergencia">Plan de emergencia familiar y comunitario</label>
                                                <select class="form-control" name="PlanEmergencia">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescpcionPlanEmergencia', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>  
                                    
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="LactanciaMaterna">Lactancia materna exclusiva/MELA</label>
                                                <select class="form-control" name="LactanciaMaterna">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescripcionLactanciaMaterna', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div> 
                                                                        
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="ViolenciaSexual">Violencia sexual (pareja y/o familiar)</label>
                                                <select class="form-control" name="ViolenciaSexual">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescipcionViolenciaSexual', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div> 

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="MetodosPlanificcion">Métodos de Planificación Familiar</label>
                                                <select class="form-control" name="MetodosPlanificcion">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
            
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="ImportanciaControlPos">Importancia del control pos parto</label>
                                                <select class="form-control" name="ImportanciaControlPos">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>
                                                
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="VacunacionRecienNacido">Vacunación y cuidados del recién nacido/a</label>
                                                <select class="form-control" name="VacunacionRecienNacido">
                                                    <option value="No">No</option>
                                                    <option value="Si">Si</option>
                                                </select>
                                        </div>
                                    </div>                             
                                
                        </div>
                    </div>
 </div>