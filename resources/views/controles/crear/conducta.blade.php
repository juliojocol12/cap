<div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Conducta</h3>
                        <div class="row ">
                                
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Sulfato Ferroso</label>
                                            {!! Form::text('SulfatoFerroso', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Ingrese número de tabletas', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Ácido Fólico</label>
                                            {!! Form::text('AcidoFolico', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Ingrese número de tabletas', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Vacunación de la madre (Td), (Tdap) </label>
                                            {!! Form::text('VacunacionTdTdap', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Ingrese la dosis que se administra', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>   
                                                                         
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Vacunación de la madre (influenza)</label>
                                            {!! Form::text('VacunacionInfluenza', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Ingrese la vacunación de influenza', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div> 

                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Otros tratamientos</label>
                                            {!! Form::text('OtrosTratamientos', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Describa otros tratamientos', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>   

                                     <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Referencia</label>
                                            {!! Form::text('Referencia', null, array('class'=>'form-control','maxlength'=>'30', 'placeholder'=>'Ingrese si se hizo referencia', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>           
                                
                        </div>
                    </div>
</div>