<div class="card">
    <div class="card-body">
        <h3 class="page__heading">Examenes laboratorio</h3>
        <div class="row ">


            <div class="col-xs-1 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="PruebasEmbarazo">Prueba de embarazo</label>
                        <select class="form-control" name="PruebasEmbarazo">
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </select>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Resultado de prueba de embarazo</label>
                    {!! Form::text('DecripcionPruebasEmbarazo', null, array('class'=>'form-control','maxlength'=>'2', 'placeholder'=>'Describa el resultado', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

                                    
            </div>  
        </div>
    </div>
</div>