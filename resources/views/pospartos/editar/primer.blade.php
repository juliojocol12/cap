<div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Primer control</h3>
                        <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Nombre Servicio (*)</label>
                                    {!! Form::text('NombreServicio', null, array('class'=>'form-control','maxlength'=>'45','placeholder'=>'Ingrese el nombre del servicio', 'autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Días Despues Parto (*)</label>
                                    {!! Form::text('DiasDespuesParto', null, array('class'=>'form-control','maxlength'=>'6','placeholder'=>'Ingrese números', 'autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="" value="EstablecimientoSalud_id">Donde Atendio Parto</label>
                                    
                                    <select class="form-control" name="EstablecimientoSalud_id" maxlength="35">
                                        @foreach($establecimientosaludos as $est)
                                        <option value="{{$est->idEstablecimientoSaludos }}">{{ $est->Nombre}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> 

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="" value="Personal_idD">Quien Atendio Parto (*)</label>                  
                                    <select class="form-control" name="Personal_idD" maxlength="35">
                                        @foreach($personaless as $per)
                                        <option value="{{$per->idPersonal}}">Dr. 
                                            {{$per->Nombre}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{--

                            <div class="col-xs-6 col-sm-6 col-md-2">
                                <div class="form-group">
                                    <label for="" value="Personal_idD">Quien Atendio Parto (*)</label>
                                    <input class="form-control" list="filtroIdPersonales" id="filtroIdPersonale" name="Personal_idD" placeholder="ingrese en número de expediente"  autocomplete="off">                                        
                                    <datalist id="filtroIdPersonales" name="Personal_idD">
                                        @foreach($personaless as $per)
                                            <option value="{{$per->idPersonal}}"> {{$per->Nombre}}</option>                                            
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>

                            --}}

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Herida Operatoria (*)</label>
                                    {!! Form::text('HeridaOperatoria', null, array('class'=>'form-control','maxlength'=>'45','placeholder'=>'Describa','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Involucion Uterina (*)</label>
                                    {!! Form::text('InvolucionUterina', null, array('class'=>'form-control','maxlength'=>'25','placeholder'=>'Describa','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Presión Arterial (*)</label>
                                    {!! Form::text('PresionArterial', null, array('class'=>'form-control','maxlength'=>'20','placeholder'=>'Ingrese números','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Frecuencia Cardiaca (*)</label>
                                    {!! Form::text('FrecuenciaCardiaca', null, array('class'=>'form-control','placeholder'=>'Ingrese números','maxlength'=>'20','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Temperatura (*)</label>
                                    {!! Form::text('Temperatura', null, array('class'=>'form-control','maxlength'=>'10','placeholder'=>'Ingrese números','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Examen de mamas (*)</label>
                                    {!! Form::text('ExamenMamas', null, array('class'=>'form-control','maxlength'=>'75','placeholder'=>'Describa','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Lactancia Materna (*)</label>
                                    {!! Form::text('LactanciaMaterna', null, array('class'=>'form-control','maxlength'=>'2','placeholder'=>'Describa','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Porque No Lactancia Materna</label>
                                    {!! Form::text('PorqueNoLactanciaMaterna', null, array('class'=>'form-control', 'placeholder'=>'Describa', 'maxlength'=>'45','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-4">                            
                                <div class="form-group">
                                    <label for="">Examen Ginecologico (*)</label>
                                    <div class="form-outline w-100 mb-4">
                                        <textarea class="form-control" id="ExamenGinecologico" name="ExamenGinecologico" placeholder="Ingrese la información del examen ginecologico" style="height:60px; width: 100%; " maxlength="200">{{$fcevaluacionposparto->ExamenGinecologico}}</textarea>
                                     </div>
                                </div>
                            </div>


                            <div class="col-xs-6 col-sm-6 col-md-4">                            
                                <div class="form-group">
                                    <label for="">Diagnostico (*)</label>
                                    <div class="form-outline w-100 mb-4">
                                        <textarea class="form-control" id="Diagnostico" name="Diagnostico"  placeholder="Ingrese la información del diagnostico" style="height:60px; width: 100%; " maxlength="200">{{$fcevaluacionposparto->Diagnostico}}</textarea>
                                     </div>
                                </div>
                            </div>
                                
                            
                            <div class="col-xs-6 col-sm-6 col-md-4">                            
                                <div class="form-group">
                                    <label for="">Conducta Tratamiento (*)</label>
                                    <div class="form-outline w-100 mb-4">
                                        <textarea class="form-control" id="ConductaTratamiento" name="ConductaTratamiento" placeholder="Ingrese la información de la conducta de tratamiento" style="height:60px; width: 100%; " maxlength="200">{{$fcevaluacionposparto->ConductaTratamiento}}</textarea>
                                     </div>
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