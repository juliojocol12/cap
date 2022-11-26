<div class="card">

                        <div class="card-body">
                        <h3 class="page__heading">Historia Clínica General</h3>
                        <div class="row ">
                        <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Diabetes">Diabetes</label>
                                        <select class="form-control" name="Diabetes">
                                        <option select">{{$fichamspasriego->Diabetes}}</option>
                                        @if ($fichamspasriego->Diabetes === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Enfermedadrenal">Enfermedad renal</label>
                                        <select class="form-control" name="Enfermedadrenal">
                                        <option select">{{$fichamspasriego->Enfermedadrenal}}</option>
                                        @if ($fichamspasriego->Enfermedadrenal === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Enfermerdadcorazon">Enfermedad del corazón</label>
                                        <select class="form-control" name="Enfermerdadcorazon">
                                        <option select">{{$fichamspasriego->Enfermerdadcorazon}}</option>
                                        @if ($fichamspasriego->Enfermerdadcorazon === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Hipertension">Hipertensión arterial</label>
                                        <select class="form-control" name="Hipertension">
                                        <option select">{{$fichamspasriego->Hipertension}}</option>
                                        @if ($fichamspasriego->Hipertension === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>
                                                                
                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Consumodrogas">Consumo de drogas incluido alcohol o tabaco</label>
                                        <select class="form-control" name="Consumodrogas">
                                        <option select">{{$fichamspasriego->Consumodrogas}}</option>
                                        @if ($fichamspasriego->Consumodrogas === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Cualquierenfermedad">Cualquier otra enfermedad o afección médica severa</label>
                                        <select class="form-control" name="Cualquierenfermedad">
                                        <option select">{{$fichamspasriego->Cualquierenfermedad}}</option>
                                        @if ($fichamspasriego->Cualquierenfermedad === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-5">
                                    <div class="form-group">
                                        <label for="">Si cuenta con alguna otra enfermedad especifique</label>
                                        
                                        {!! Form::text('Especifiquefichamspasriegos', null, array('class'=>'form-control','maxlength'=>'50', 'placeholder'=>'Por favor especifique de lo contrario ingrese un "No"', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <h6>La presencia de algunas de las características anteriores hace necesaria la evaluación de la paciente por un médico, quien tomará la decisión de referirla o no a otro servicio de mayor complejidad.</h6>
                                    </div>                                       
                                </div>

                                 
                                <div class="col-xs-6 col-sm-6 col-md-12">
                                    <div class="form-group">
                                        <label for="">En caso de referir, indique a que establecimiento :</label>
                                        
                                        {!! Form::text('Refirio', null, array('class'=>'form-control','maxlength'=>'35', 'placeholder'=>'Ingrese el nombre del establecimiento al que será referida, de lo contrario deje la casilla en blanco', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                

                                




                                </div>
                        </div>
                        </div>