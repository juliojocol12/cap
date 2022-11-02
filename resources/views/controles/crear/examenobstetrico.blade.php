<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Examen Obstetrico</h3>
    <div class="row ">

            <div class="col-xs-1 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="ExamenMamas">Examen de mamas</label>
                    <select class="form-control" name="ExamenMamas">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Observacion Abdominal</label>
                    {!! Form::text('ObservacionAbdominal', null, array('class'=>'form-control','maxlength'=>'25', 'placeholder'=>'forma del abdomen', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Altura Uterina</label>
                    {!! Form::text('AlturaUterina', null, array('class'=>'form-control', 'maxlength'=>'45', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-1 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="PresenciaMovimientoFetales">Presencia de Movimiento Fetales</label>
                    <select class="form-control" name="PresenciaMovimientoFetales">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Frecuencia Cardiaca Fetal</label>
                    {!! Form::text('FrecuenciaCardiacaFetal', null, array('class'=>'form-control', 'maxlength'=>'45', 'placeholder'=>'foco fetal', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Maniobras Leopold</label>
                    {!! Form::text('ManiobrasLeopold', null, array('class'=>'form-control', 'maxlength'=>'45', 'placeholder'=>'mayor 36 semanas', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>
            </div>
    </div>
</div>