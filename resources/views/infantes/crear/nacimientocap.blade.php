                        <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-3">
                            <label for="chec">Active si nació en algún establecimiento del CAP </label>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-5">
                        <input class="form-group" name="chec" type="checkbox" id="chec" onChange="comprobar(this);"/>
                        </div>
                        </div>
                        <div class="row " id="boton" readonly style="display:none">

                                 <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="" value="EstablecimientoSalud_id">¿En qué establecimiento? (*)</label>
                                        <select class="form-control" name="EstablecimientoSalud_id">
                                            @foreach($establecimientosaludos as $establecimiento)
                                            <option value="{{$establecimiento->idEstablecimientoSaludos}}" >{{ $establecimiento->Nombre}}, {{ $establecimiento->PuestoSalud}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="Personal_idD">¿Qué médico atendió? (*)</label>
                                        <select class="form-control" name="Personal_idD">
                                            @foreach($personaless as $personal)
                                            <option value="{{$personal->idPersonal}}" >{{ $personal->Nombre}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>     

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de egreso</label>
                                        {!! Form::date('FechaEgreso', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Observaciones</label> <br> 
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="Observaciones" name="Observaciones" style="height:90px; width: 100%; " maxlength="200" placeholder="Observaciones durante el nacimiento"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                    
                                                   




                                </div>
