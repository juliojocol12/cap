                    <div class="card">

                        <div class="card-body">
                        <h3 class="page__heading">Datos</h3>
                        <div class="row ">
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="">Registro número</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fichamspasriego->RegistroNo}}" disabled>
                                </div>                                       
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="" value="DatosPersonalesPacientes_id">Nombre de la embarazada</label>
                                    <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="{{$fichamspasriego->datospersonalespacientes->NombresPaciente}} {{$fichamspasriego->datospersonalespacientes->ApellidosPaciente}}" autocomplete="off" disabled>     
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="" value="DatosPersonalesPacientes_id">Pueblo</label>
                                    <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="{{$fichamspasriego->datospersonalespacientes->pueblos->Nombre}}" autocomplete="off" disabled>     
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="" value="DatosPersonalesPacientes_id">Ocupación</label>
                                    <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="{{$fichamspasriego->datospersonalespacientes->ProfesionOficio}}" autocomplete="off" disabled>     
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="" value="DatosPersonalesPacientes_id">Nombre del responsable</label>
                                    <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="{{$fichamspasriego->datospersonalespacientes->datosfamiliares->NombresFamiliar}} {{$fichamspasriego->datospersonalespacientes->datosfamiliares->ApellidosFamiliar}}" autocomplete="off" disabled>     
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="" value="DatosPersonalesPacientes_id">Ocupacion</label>
                                    <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="{{$fichamspasriego->datospersonalespacientes->datosfamiliares->ProfesionOficio}}" autocomplete="off" disabled>     
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="" value="DatosPersonalesPacientes_id">Estado civil</label>
                                    <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="{{$fichamspasriego->datospersonalespacientes->datosfamiliares->EstadoCivil}}" autocomplete="off" disabled>     
                                </div>
                            </div>
                                
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="" value="FCPrenatalPostparto_id">Fecha de última regla</label>
                                    <input class="form-control" list="filtroIDFichas" id="filtroIDFicha" name="FCPrenatalPostparto_id" placeholder="{{$fichamspasriego->FCPrenatalPostparto_id}}" autocomplete="off" disabled>    
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
