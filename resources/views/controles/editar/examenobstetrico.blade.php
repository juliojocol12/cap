<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Examen obstérico</h3>
    <div class="row ">

            <div class="col-xs-1 col-sm-6 col-md-3">
                <div class="form-group">
                    <label for="ExamenMamas">Examen de mamas</label>
                    <select class="form-control" name="ExamenMamas">
                    <option select">{{$controle->ExamenMamas}}</option>
                    @if ($controle->ExamenMamas === 'Si')
                    <option value="No">No</option>
                    @else
                    <option value="Si">Si</option>
                    @endif
                    </select>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label for="">Observación abdominal</label>
                    {!! Form::text('ObservacionAbdominal', null, array('class'=>'form-control','maxlength'=>'25', 'placeholder'=>'forma del abdomen', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label for="">Altura uterina</label>
                    {!! Form::text('AlturaUterina', null, array('class'=>'form-control', 'maxlength'=>'45', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-1 col-sm-6 col-md-3">
                <div class="form-group">
                    <label for="PresenciaMovimientoFetales">Presencia de movimientos fetales</label>
                    <select class="form-control" name="PresenciaMovimientoFetales">
                    <option select">{{$controle->PresenciaMovimientoFetales}}</option>
                    @if ($controle->PresenciaMovimientoFetales === 'Si')
                    <option value="No">No</option>
                    @else
                    <option value="Si">Si</option>
                    @endif
                    </select>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label for="">Frecuencia cardíaca fetal</label>
                    {!! Form::text('FrecuenciaCardiacaFetal', null, array('class'=>'form-control', 'maxlength'=>'45', 'placeholder'=>'foco fetal', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label for="">Maniobras Leopold</label>
                    {!! Form::text('ManiobrasLeopold', null, array('class'=>'form-control', 'maxlength'=>'45', 'placeholder'=>'mayor 36 semanas', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>
            </div>
    </div>
</div>