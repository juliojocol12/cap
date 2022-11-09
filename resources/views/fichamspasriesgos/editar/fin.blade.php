<div class="card">

                        <div class="card-body">
                        <h3 class="page__heading"></h3>
                        <div class="row ">
                        <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                        <label for="">Fecha (*)</label>
                                        {!! Form::date('Fecha', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   
                                
                                    
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombre de la persona responsable (*)</label>
                                        
                                        {!! Form::text('Nombre', null, array('class'=>'form-control','maxlength'=>'35', 'placeholder'=>'Indique el nombre de la persona que atendió','autocomplete'=>'off')) !!}
                                    </div>     
                                </div>   


                        




                                </div>
                        </div>
                        </div>
