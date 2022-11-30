<div class="card">
    <div class="card-body">
        <h3 class="page__heading">Datos iniciales</h3>
            <div class="row ">

                <div class="col-xs-6 col-sm-6 col-md-3">                            
                    <div class="form-group">
                        <label for="">Fecha de evaluación</label>
                        {!! Form::date('FechaEvaluacionPosparto', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="form-group">
                        <label for="" value="DatosPersonalesPacientes_id">Datos de la paciente</label>
                        <input class="form-control" list="filtroIdPacientes" id="filtroIdPaciente" name="DatosPersonalesPacientes_id" placeholder="Ingrese el DPI de la paciente" value="{{$fcevaluacionposparto->DatosPersonalesPacientes_id }}" autocomplete="off">                                        
                        <datalist id="filtroIdPacientes" name="DatosPersonalesPacientes_id" >
                            @foreach($datospacientes as $idcui)
                                <option value="{{$idcui->idDatosPersonalesPacientes}}"> {{$idcui->CUI}}, {{$idcui->NombresPaciente}}</option>                                            
                            @endforeach
                        </datalist>
                    </div>
                </div>
                          
        </div>
    </div>
</div>