<div class="card">

                        <div class="card-body">
                        <h3 class="page__heading"></h3>
                        <div class="row ">
                        <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                        <label for="">Registro número (*)</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fichamspasriego->RegistroNo}}" disabled>
                                </div>                                       
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="DatosPersonalesPacientes_id">Datos de Madre (*)</label>

                                        <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="{{$fichamspasriego->DatosPersonalesPacientes_id}}" autocomplete="off" disabled>                                        
                                        
                                    </div>
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="FCPrenatalPostparto_id">Ficha Prenatal Posparto(*)</label>

                                        <input class="form-control" list="filtroIDFichas" id="filtroIDFicha" name="FCPrenatalPostparto_id" placeholder="{{$fichamspasriego->FCPrenatalPostparto_id}}" autocomplete="off" disabled>                                        
                                        
                                    </div>
                                </div>
                                             


                        




                                </div>
                        </div>
                        </div>
