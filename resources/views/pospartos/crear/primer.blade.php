<div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Primer control</h3>
                        <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Nombre de servicio (*)</label>
                                    {!! Form::text('NombreServicio', null, array('class'=>'form-control','maxlength'=>'45','placeholder'=>'Ingrese el nombre del servicio', 'autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Días despúes del parto (*)</label>
                                    {!! Form::text('DiasDespuesParto', null, array('class'=>'form-control','maxlength'=>'6','placeholder'=>'Ingrese en números', 'autocomplete'=>'off')) !!}
                                </div>
                            </div>
 
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="" value="EstablecimientoSalud_id">¿Dónde atendió el parto? (*)</label>
                                    
                                    <select class="form-control" name="EstablecimientoSalud_id" maxlength="35">
                                        @foreach($establecimientosaludos as $est)
                                        <option value="{{$est->idEstablecimientoSaludos }}">{{ $est->Nombre}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> 

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="" value="Medico">Especialista que atendió el parto (*)</label>                  
                                    <input type="text" class="form-control" list="filtroMedicos" id="filtroMedico" name="Medico" placeholder="Ingrese el encargado del parto" autocomplete="off">                                        
                                    <datalist id="filtroMedicos" name="Medico">
                                        <option value="Médico"> Médico</option>       
                                        <option value="Comadrona"> Comadrona</option>      
                                        <option value="Enfermero(a)"> Enfermero(a) </option> 
                                        <option value="Ninguno"> Ninguno</option>
                                    </datalist>
                                </div>
                            </div>

                            {{--

                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="" value="Personal_idD">¿Quién atendio el parto? (*)</label>
                                    <input class="form-control" list="filtroIdPersonales" id="filtroIdPersonale" name="Personal_idD" placeholder="ingrese en número de expediente"  autocomplete="off">                                        
                                    <datalist id="filtroIdPersonales" name="Personal_idD">
                                        @foreach($personaless as $per)
                                            <option value="{{$per->idPersonal}}"> {{$per->Nombre}}</option>                                            
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>

                            --}}

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Herida operatoria (*)</label>
                                    {!! Form::text('HeridaOperatoria', null, array('class'=>'form-control','maxlength'=>'45','placeholder'=>'Describa la herida','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Involución uterina (*)</label>
                                    {!! Form::text('InvolucionUterina', null, array('class'=>'form-control','maxlength'=>'25','placeholder'=>'Describa involución uterina','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Presión arterial (*)</label>
                                    {!! Form::text('PresionArterial', null, array('class'=>'form-control','maxlength'=>'20','placeholder'=>'Ingrese números','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Frecuencia cardíaca (*)</label>
                                    {!! Form::text('FrecuenciaCardiaca', null, array('class'=>'form-control','placeholder'=>'Ingrese números','maxlength'=>'20','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Temperatura (*)</label>
                                    {!! Form::text('Temperatura', null, array('class'=>'form-control','maxlength'=>'10','placeholder'=>'Ingrese números','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Examen de mamas (*)</label>
                                    {!! Form::text('ExamenMamas', null, array('class'=>'form-control','maxlength'=>'75','placeholder'=>'Describa el examen','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">Lactancia materna (*)</label>
                                    {!! Form::text('LactanciaMaterna', null, array('class'=>'form-control','maxlength'=>'2','placeholder'=>'Describa lactancia materna','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="name">¿Por qué no lactancia materna?</label>
                                    {!! Form::text('PorqueNoLactanciaMaterna', null, array('class'=>'form-control', 'placeholder'=>'Describa', 'maxlength'=>'45','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-3">                            
                                <div class="form-group">
                                    <label for="">Examen ginecológico (*)</label>
                                    <div class="form-outline w-100 mb-4">
                                        <textarea class="form-control" id="ExamenGinecologico" name="ExamenGinecologico" placeholder="Ingrese la información del examen ginecológico" style="height:90px; width: 100%; " maxlength="200"></textarea>
                                     </div>
                                </div>
                            </div>

 
                            <div class="col-xs-6 col-sm-6 col-md-3">                            
                                <div class="form-group">
                                    <label for="">Diagnóstico (*)</label>
                                    <div class="form-outline w-100 mb-4">
                                        <textarea class="form-control" id="Diagnostico" name="Diagnostico"  placeholder="Ingrese la información del diagnóstico" style="height:90px; width: 100%; " maxlength="200"></textarea>
                                     </div>
                                </div>
                            </div>
                                
                            
                            <div class="col-xs-6 col-sm-6 col-md-3">                            
                                <div class="form-group">
                                    <label for="">Conducta tratamiento (*)</label>
                                    <div class="form-outline w-100 mb-4">
                                        <textarea class="form-control" id="ConductaTratamiento" name="ConductaTratamiento" placeholder="Ingrese la información de la conducta de tratamiento" style="height:90px; width: 100%; " maxlength="200"></textarea>
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