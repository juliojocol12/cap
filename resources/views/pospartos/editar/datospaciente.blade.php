<div class="card">
    <div class="card-body">
        <h3 class="page__heading">Datos de paciente</h3>
            <div class="row ">

                <div class="col-xs-6 col-sm-6 col-md-2">
                    <div class="form-group">
                        <label for="" value="FCPrenatalPostparto_id">Número de Expediente</label>
                        <input class="form-control" list="filtroIdExpedientes" id="filtroIdExpediente" name="FCPrenatalPostparto_id" placeholder="ingrese en número de expediente" autocomplete="off">                                        
                        <datalist id="filtroIdExpedientes" name="FCPrenatalPostparto_id">
                            @foreach($fcprenatalpostpartos as $idprenatal)
                                <option value="{{$idprenatal->idFCPrenatalPostpartos}}"> {{$idprenatal->ExpedienteNo}}, {{$idprenatal->Fecha}}</option>                                            
                            @endforeach
                        </datalist>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-2">                            
                    <div class="form-group">
                        <label for="">Fecha</label>
                        {!! Form::date('FechaEvaluacionPosparto', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-2">
                    <div class="form-group">
                        <label for="" value="DatosPersonalesPacientes_id">Datos de la madre</label>
                        <input class="form-control" list="filtroIdPacientes" id="filtroIdPaciente" name="DatosPersonalesPacientes_id" placeholder="ingrese el DPI de la Madre" autocomplete="off">                                        
                        <datalist id="filtroIdPacientes" name="DatosPersonalesPacientes_id">
                            @foreach($datospacientes as $idcui)
                                <option value="{{$idcui->idDatosPersonalesPacientes}}"> {{$idcui->CUI}}, {{$idcui->NombresPaciente}}</option>                                            
                            @endforeach
                        </datalist>
                    </div>
                </div>
                          
        </div>
    </div>
</div>