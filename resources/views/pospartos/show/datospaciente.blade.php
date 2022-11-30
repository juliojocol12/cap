<div class="card">
                        <div class="card-body">
                            <h3 class="page__heading">Datos generales de la paciente</h3>
                            <div class="row ">                                

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Nombre completo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->datospersonalespacientes->NombresPaciente}} {{$fcevaluacionposparto->datospersonalespacientes->ApellidosPaciente}}" disabled>
                                    </div>                                       
                                </div>

                                
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->datospersonalespacientes->FechaNaciemientoPaciente}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->datospersonalespacientes->Numerodireccion}} zona {{$fcevaluacionposparto->datospersonalespacientes->Zonadireccion}} {{$fcevaluacionposparto->datospersonalespacientes->Descripciondireccion}} {{$fcevaluacionposparto->datospersonalespacientes->Grupodireccion}} {{$fcevaluacionposparto->datospersonalespacientes->Municipiodep}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->datospersonalespacientes->Telefono}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Celular</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->datospersonalespacientes->Celular}}" disabled>
                                    </div>                                       
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Migrante</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->datospersonalespacientes->Migrante}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Profesión u oficio</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->datospersonalespacientes->ProfesionOficio}}" disabled>
                                    </div>                                       
                                </div>

                                {{--
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Pueblo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->datospersonalespacientes->pueblos->Nombre }}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de gestas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->fcprenatalpostpartos->NoGestas}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de partos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->fcprenatalpostpartos->Partos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de abortos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->fcprenatalpostpartos->Aborto}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de partos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->fcprenatalpostpartos->Partos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de cesáreas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->fcprenatalpostpartos->NoCesareas}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Nacidos Vivos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->fcprenatalpostpartos->NacidosVivos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Hijos Vivos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->fcprenatalpostpartos->HijosVivos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Hijos Muertos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->fcprenatalpostpartos->HijosMuertos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Nacidos Muertos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->fcprenatalpostpartos->NacidosMuertos}}" disabled>
                                    </div>                                       
                                </div>
                                --}}

                            </div>    

                        </div>                    
                    </div>