<div class="card">
                    <div class="card-body">
                        <h3 class="page__heading">Consejeria</h3>
                        <div class="row ">
                        <div class="col-xs-1 col-sm-6 col-md-3">
                                     <div class="form-group">
                                            <label for="AlimentacionEmbarazo">Alimentación sobre el embarazo</label>
                                                <select class="form-control" name="AlimentacionEmbarazo">
                                                <option select">{{$controle->AlimentacionEmbarazo}}</option>
                                                @if ($controle->AlimentacionEmbarazo === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescripcionAlimentacionEmbarazo', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa alimentación aconsejada', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="CuidadosPersonales">Cuidados Personales</label>
                                                <select class="form-control" name="CuidadosPersonales">
                                                <option select">{{$controle->CuidadosPersonales}}</option>
                                                @if ($controle->CuidadosPersonales === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescripcionCuidadosPersonales', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Descanso, evitar uso alcohol y cigarro', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="SintomasComunes">Síntomas comunes</label>
                                                <select class="form-control" name="SintomasComunes">
                                                <option select">{{$controle->SintomasComunes}}</option>
                                                @if ($controle->SintomasComunes === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescipcionSintomasComunes', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Acidez, estreñimiento, náuseas...', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>
                  
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="SenalesPeligro">Señales de peligro en el embarazo</label>
                                                <select class="form-control" name="SenalesPeligro">
                                                <option select">{{$controle->SenalesPeligro}}</option>
                                                @if ($controle->SenalesPeligro === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescripcionSenalesPeligro', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa señales de peligro', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>  

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="ConsejeriaPrePostVIH">Consejería pre/pos prueba VIH</label>
                                                <select class="form-control" name="ConsejeriaPrePostVIH">
                                                <option select">{{$controle->ConsejeriaPrePostVIH}}</option>
                                                @if ($controle->ConsejeriaPrePostVIH === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescripcionConsejeriaPrePostVIH', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa pre/pos prueba VIH', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div> 

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="PlanParto">Plan de parto </label>
                                                <select class="form-control" name="PlanParto">
                                                <option select">{{$controle->PlanParto}}</option>
                                                @if ($controle->PlanParto === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescrpcionPlanParto', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'(Ahorro, transporte, preparar insumos)', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>   

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="PlanEmergencia">Plan de emergencia familiar y comunitario</label>
                                                <select class="form-control" name="PlanEmergencia">
                                                <option select">{{$controle->PlanEmergencia}}</option>
                                                @if ($controle->PlanEmergencia === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescpcionPlanEmergencia', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa plan de emergencia', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>  
                                    
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="LactanciaMaterna">Lactancia materna exclusiva/MELA</label>
                                                <select class="form-control" name="LactanciaMaterna">
                                                <option select">{{$controle->LactanciaMaterna}}</option>
                                                @if ($controle->LactanciaMaterna === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescripcionLactanciaMaterna', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa lactancia materna', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div> 
                                                                        
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="ViolenciaSexual">Violencia sexual (pareja y/o familiar)</label>
                                                <select class="form-control" name="ViolenciaSexual">
                                                <option select">{{$controle->ViolenciaSexual}}</option>
                                                @if ($controle->ViolenciaSexual === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            {!! Form::text('DescipcionViolenciaSexual', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa situación', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div> 

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="MetodosPlanificcion">Métodos de Planificación Familiar</label>
                                                <select class="form-control" name="MetodosPlanificcion">
                                                <option select">{{$controle->MetodosPlanificcion}}</option>
                                                @if ($controle->MetodosPlanificcion === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
            
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="ImportanciaControlPos">Importancia del control pos parto</label>
                                                <select class="form-control" name="ImportanciaControlPos">
                                                <option select">{{$controle->ImportanciaControlPos}}</option>
                                                @if ($controle->ImportanciaControlPos === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                                
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="VacunacionRecienNacido">Vacunación y cuidados del recién nacido/a</label>
                                                <select class="form-control" name="VacunacionRecienNacido">
                                                <option select">{{$controle->VacunacionRecienNacido}}</option>
                                                @if ($controle->VacunacionRecienNacido === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>                             
                                
                        </div>
                    </div>
 </div>