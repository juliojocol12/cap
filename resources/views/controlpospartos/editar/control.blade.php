<div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Control posparto</h3>
                        <div class="row ">
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Número de control (*)</label>
                                            {!! Form::text('NoControl', null, array('class'=>'form-control','maxlength'=>'2', 'placeholder'=>'Ingrese un número', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="" value="FCEvaluacionPosparto_id">Número de ficha clinica de evaluación posparto (*)</label>
                                            <input class="form-control" list="filtoIdFichas" id="filtoIdFicha" name="FCEvaluacionPosparto_id" placeholder="ingrese el DPI de la Madre" autocomplete="off" value="{{$controlposparto->FCEvaluacionPosparto_id}}">                                        
                                            <datalist id="filtoIdFichas" name="FCEvaluacionPosparto_id">
                                                @foreach($fcevaluacionpospartos as $idficha)
                                                    <option value="{{$idficha->idFCEvaluacionPosparto }}"> {{$idficha->idFCEvaluacionPosparto }}</option>                                            
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Semanas despues del parto (*)</label>
                                            {!! Form::text('SemanasDespuesParto', null, array('class'=>'form-control','maxlength'=>'5', 'placeholder'=>'Ingrese el número', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-2">                            
                                        <div class="form-group">
                                            <label for="">Fecha (*)</label>
                                            {!! Form::date('FechaVisita', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <div class="form-group">
                                            <label for="">Involución uterina (*)</label>
                                            {!! Form::text('InvolucionUterina', null, array('class'=>'form-control','maxlength'=>'25', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <div class="form-group">
                                            <label for="">Examen de mamas (*)</label>
                                            {!! Form::text('ExamenMamas', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <div class="form-group">
                                            <label for="">Herida operatoria (*)</label>
                                            {!! Form::text('HeridaOperatiria', null, array('class'=>'form-control','maxlength'=>'25', 'placeholder'=>'Describa', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">                            
                                        <div class="form-group">
                                            <label for="">Examen ginecológico (*)</label>
                                            <div class="form-outline w-100 mb-4">

                                                <textarea class="form-control" id="ExamenGInecológico" name="ExamenGInecológico" style="height:60px; width: 100%; " maxlength="200" placeholder="Describa: hallazgos patológicos y otros">{{$controlposparto->ExamenGInecológico}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <div class="form-group">
                                            <label for="">Presión Arterial (*)</label>
                                            {!! Form::text('PresionArterial', null, array('class'=>'form-control','maxlength'=>'20', 'placeholder'=>'Describa con números', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <div class="form-group">
                                            <label for="">Mm / Hg (*)</label>
                                            {!! Form::text('MMHG', null, array('class'=>'form-control','maxlength'=>'20', 'placeholder'=>'Describa con números', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <div class="form-group">
                                            <label for="">Frecuencia Cardiaca (*)</label>
                                            {!! Form::text('FrecuenciaCardiaca', null, array('class'=>'form-control','maxlength'=>'20', 'placeholder'=>'Describa con números', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <div class="form-group">
                                            <label for="">Temperatura (*)</label>
                                            {!! Form::text('Temperatura', null, array('class'=>'form-control','maxlength'=>'10', 'placeholder'=>'Ingrese con número', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-2">
                                        <div class="form-group">
                                            <label for="LactanciaMaterna">Lactancia materna exclusiva (*)</label>
                                            <select class="form-control" name="LactanciaMaterna">
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                    </div>                  
                                    <div class="d-none">
                                        <div class="col-xs-12 col-sm-12 col-md-2">
                                            <div class="form-group">
                                                <label for="" value="Usuario_id">Encargado de llenado</label>
                                                <select id="Usuario_id" class="form-control" name="Usuario_id" maxlength="35">
                                                    <option value="{{\Illuminate\Support\Facades\Auth::user()->id}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>                 

                                </div>
                        </div>
                    </div>
