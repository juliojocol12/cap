<div class="card">
                        <div class="card-body">
                            <h4 class="page__heading">Datos de primer control</h4>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Nombre Servicio</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->NombreServicio}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Días Despues Parto</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->DiasDespuesParto}}" disabled>
                                    </div>                                       
                                </div>  

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Donde Atendio Parto</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->establecimientosaludos->Nombre}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Quien Atendio Parto</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Dr. {{$fcevaluacionposparto->personaless->Nombre}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Herida Operatoria</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->HeridaOperatoria}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Involucion Uterina</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->InvolucionUterina}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Presión Arterial</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->PresionArterial}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Frecuencia Cardiaca</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->FrecuenciaCardiaca}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Nombre Temperatura</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->Temperatura}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Examen de mamas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->ExamenMamas}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Lactancia Materna</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->LactanciaMaterna}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Porque No Lactancia Materna</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->PorqueNoLactanciaMaterna}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Examen Ginecologico</label>
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="ExamenGinecologico" name="ExamenGinecologico" style="height:60px; width: 100%; " placeholder="{{$fcevaluacionposparto->ExamenGinecologico}}" disabled></textarea>
                                        </div>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Diagnostico</label>
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="Diagnostico" name="Diagnostico" style="height:60px; width: 100%; " placeholder="{{$fcevaluacionposparto->Diagnostico}}" disabled></textarea>
                                        </div>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Conducta Tratamiento</label>
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="ConductaTratamiento" name="ConductaTratamiento" style="height:60px; width: 100%; " placeholder="{{$fcevaluacionposparto->ConductaTratamiento}}" disabled></textarea>
                                        </div>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Usuario que ingreso los datos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{\Illuminate\Support\Facades\Auth::user()->name}}" disabled>
                                    </div>                                       
                                </div>



                            </div>    

                        </div>                    
                    </div>