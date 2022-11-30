<div class="card">

                        <div class="card-body">
                        <h3 class="page__heading"></h3>
                        <div class="row ">
                        <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                        <label for="">Registro número (*)</label>
                                        
                                        {!! Form::text('RegistroNo', null, array('class'=>'form-control','maxlength'=>'5', 'placeholder'=>'Ingrese el número de registro', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="DatosPersonalesPacientes_id">Datos de la paciente (*)</label>

                                        <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="Ingrese el DPI de la paciente" autocomplete="off">                                        
                                        <datalist id="filtroIDPacientes" name="DatosPersonalesPacientes_id">
                                            @foreach($datospacientes as $idpaciente)
                                            <option value="{{$idpaciente->idDatosPersonalesPacientes}}"> {{$idpaciente->CUI}}, {{$idpaciente->NombresPaciente}} {{$idpaciente->ApellidosPaciente}} </option>
                                            
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="FCPrenatalPostparto_id">Ficha prenatal posparto(*)</label>

                                        <input class="form-control" list="filtroIDFichas" id="filtroIDFicha" name="FCPrenatalPostparto_id" placeholder="Ingrese número de ficha clínica" autocomplete="off">                                        
                                        <datalist id="filtroIDFichas" name="FCPrenatalPostparto_id">
                                            @foreach($fcprenatalpostparto as $idFicha)
                                            <option value="{{$idFicha->idFCPrenatalPostpartos}}"> {{$idFicha->Fecha}}, {{$idFicha->DatosPersonalesPacientes_id}}  </option>
                                            
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>
                                             


                        




                                </div>
                        </div>
                        </div>
