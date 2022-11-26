<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Evaluación nutricional de la mujer embarazada</h3>
    <div class="row ">

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Peso</label>
                    {!! Form::text('Pesolb', null, array('class'=>'form-control','maxlength'=>'7', 'placeholder'=>'Ingrese peso en lb', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Talla</label>
                    {!! Form::text('Talla', null, array('class'=>'form-control', 'maxlength'=>'5', 'placeholder'=>'Ingrese talla', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">CMB</label>
                    {!! Form::text('CMB', null, array('class'=>'form-control', 'maxlength'=>'5', 'placeholder'=>'-12 sem', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Diagnóstico</label>
                    {!! Form::text('Diagnostico', null, array('class'=>'form-control', 'maxlength'=>'45', 'placeholder'=>'Ingrese el diagnóstico', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Diagnóstico de IMC</label>
                    {!! Form::text('IMC_Diagnostico', null, array('class'=>'form-control', 'maxlength'=>'45', 'placeholder'=>'+12 SEM', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Acciones IMC</label>
                    {!! Form::text('Accionesicm', null, array('class'=>'form-control', 'maxlength'=>'45', 'placeholder'=>'Ingrese acciones IMC', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-1 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="GananciaPeso">Ganancia de peso</label>
                    <select class="form-control" name="GananciaPeso">
                    <option value="No">Ninguna</option>
                    <option value="Si">Adecuada</option>
                    <option value="Si">Pequeño</option>
                    <option value="Si">Excesiva</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="form-group responsive" >
                    <label for="">Acciones de peso</label>
                    <div class="form-outline w-100 mb-4">
                        <textarea class="form-control" id="Accionesganancia" name="Accionesganancia" style="height:90px" maxlength="150" placeholder="Ingrese acciones de peso"></textarea>
                    </div>       
                </div>                                       
            </div>
            </div>
    </div>
</div>