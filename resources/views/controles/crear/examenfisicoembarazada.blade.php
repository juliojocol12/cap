<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Examen Fisico de la Embarazada</h3>
    <div class="row ">
 
        
        <div class="col-xs-6 col-sm-6 col-md-2">
            <div class="form-group">
                <label for="">No. Control</label>
                {!! Form::text('NoControl', null, array('class'=>'form-control','maxlength'=>'15', 'autocomplete'=>'off')) !!}
            </div>                                       
        </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Semanas de Embarazo</label>
                    {!! Form::text('SemanasEmbarazo', null, array('class'=>'form-control','maxlength'=>'5','autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Fecha Visita</label>
                    {!! Form::date('FechaVisita', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="" value="DatosPersonalesPacientes_id">Datos de Madre</label>
                    <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="ingrese el cui " autocomplete="off">                                        
                    <datalist id="filtroIDPacientes" name="DatosPersonalesPacientes_id">
                        @foreach($datospacientes as $idpaciente)
                        <option value="{{$idpaciente->idDatosPersonalesPacientes}}"> {{$idpaciente->CUI}}, {{$idpaciente->NombresPaciente}} {{$idpaciente->ApellidosPaciente}} </option>
                        @endforeach
                    </datalist>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="" value="FCPrenatalPostparto_id">Ficha Clinica</label>
                    <input class="form-control" list="filtroFClinicas" id="filtroFClinica" name="FCPrenatalPostparto_id" placeholder="ingrese ficha clinica" autocomplete="off">                                        
                    <datalist id="filtroFClinicas" name="FCPrenatalPostparto_id">
                        @foreach($fcprenatalpostparto as $idFClinica)
                        <option value="{{$idFClinica->idFCPrenatalPostpartos}}"> {{$idFClinica->Fecha}} </option>
                        @endforeach
                    </datalist>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Fecha Posible Parto</label>
                    {!! Form::date('FechaPosibleParto', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                    <a href="https://www.diainternacionalde.com/sumar-restar-dias-fecha" target="_blank" class="btn btn-danger mr-3">Saber fecha</a>
                </div>
            </div>

            

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Circuferencia de Embarazo</label>
                    {!! Form::text('CircuferenciaBrazo', null, array('class'=>'form-control', 'maxlength'=>'5', 'placeholder'=>'En centimetros', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            
            </div>
    </div>
</div>