<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Signos Vitales</h3>
    <div class="row ">

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Presión Arterial</label>
                    {!! Form::text('PresionArterial', null, array('class'=>'form-control','maxlength'=>'20',  'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Temperatura</label>
                    {!! Form::text('Temperatura', null, array('class'=>'form-control', 'maxlength'=>'10', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Respiracion Por Minuto</label>
                    {!! Form::text('RespiracionPorMinuto', null, array('class'=>'form-control', 'maxlength'=>'20', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>


            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Frecuencia Cardiaca Maternal</label>
                    {!! Form::text('FrecuenciaCardiacaMaternal', null, array('class'=>'form-control', 'maxlength'=>'20', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            
            </div>
    </div>
</div>