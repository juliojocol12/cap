<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Examen General</h3>
    <div class="row ">

        <div class="col-xs-1 col-sm-6 col-md-3">
            <div class="form-group">
                <h6 for="Anemia">Anemia</h6>
                <font size=1.5>
                    Estado general, palidez palmar, conjuntivas, uñas.
                </font>
                <select class="form-control" name="Anemia">
                <option value="No">No</option>
                <option value="Si">Si</option>
                </select>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-4">
            <div class="form-group responsive" >
                <label for="">Descripción de Anemia</label>
                <div class="form-outline w-100 mb-4">
                    <textarea class="form-control" id="DescripcionAnemia" name="DescripcionAnemia" style="height:90px" maxlength="100"></textarea>
                </div>       
            </div>                                       
        </div>

            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label for="">Examen CardioPulmonar</label>
                    {!! Form::text('ExamenCardioPulmonar', null, array('class'=>'form-control', 'maxlength'=>'45', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            
            </div>
    </div>
</div>