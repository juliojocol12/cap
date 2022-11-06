<div class="card">
                        <div class="card-body">
                            <h3 class="page__heading">Signos y sintomas de peligro</h3>
                            <div class="row ">
                            <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="HemorragiaVaginal">Hemorragia vaginal (*)</label>
                                        <select class="form-control" name="HemorragiaVaginal" value="{{$fcprenatalpostparto->HemorragiaVaginal}}">
                                        <option select">{{$fcprenatalpostparto->HemorragiaVaginal}}</option>
                                        @if ($fcprenatalpostparto->HemorragiaVaginal === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="DolordeCabeza">Dolor de cabeza severo (*)</label>
                                        <select class="form-control" name="DolordeCabeza" value="{{$fcprenatalpostparto->DolordeCabeza}}">
                                        <option select">{{$fcprenatalpostparto->DolordeCabeza}}</option>
                                        @if ($fcprenatalpostparto->DolordeCabeza === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="VisionBorrosa">Vision Borrosa (*)</label>
                                        <select class="form-control" name="VisionBorrosa" value="{{$fcprenatalpostparto->VisionBorrosa}}">
                                        <option select">{{$fcprenatalpostparto->VisionBorrosa}}</option>
                                        @if ($fcprenatalpostparto->VisionBorrosa === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="Convulsion">Convulsion (*)</label>
                                        <select class="form-control" name="Convulsion" value="{{$fcprenatalpostparto->Convulsion}}">
                                        <option select">{{$fcprenatalpostparto->Convulsion}}</option>
                                        @if ($fcprenatalpostparto->Convulsion === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="DolorAbdominal">Dolor abdominal severo (epigastralgia) (*)</label>
                                        <select class="form-control" name="DolorAbdominal" value="{{$fcprenatalpostparto->DolorAbdominal}}">
                                        <option select">{{$fcprenatalpostparto->DolorAbdominal}}</option>
                                        @if ($fcprenatalpostparto->DolorAbdominal === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="PresionArterial">Presion Arterial (*)</label>
                                        <select class="form-control" name="PresionArterial" value="{{$fcprenatalpostparto->PresionArterial}}">
                                        <option select">{{$fcprenatalpostparto->PresionArterial}}</option>
                                        @if ($fcprenatalpostparto->PresionArterial === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="Fiebre">Fiebre (*)</label>
                                        <select class="form-control" name="Fiebre" value="{{$fcprenatalpostparto->Fiebre}}">
                                        <option select">{{$fcprenatalpostparto->Fiebre}}</option>
                                        @if ($fcprenatalpostparto->Fiebre === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="PresentacionesFetales">Presentaciones fetales anormales (*)</label>
                                        <select class="form-control" name="PresentacionesFetales" value="{{$fcprenatalpostparto->PresentacionesFetales}}">
                                        <option select">{{$fcprenatalpostparto->PresentacionesFetales}}</option>
                                        @if ($fcprenatalpostparto->PresentacionesFetales === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="MotivoConsulta">Motivo de consulta (*)</label>
                                        <select class="form-control" name="MotivoConsulta" value="{{$fcprenatalpostparto->MotivoConsulta}}">
                                        <option select">{{$fcprenatalpostparto->MotivoConsulta}}</option>
                                        <option value="Embarazo">Embarazo</option>
                                        <option value="Parto">Parto</option>
                                        <option value="Postparto">Postparto</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group responsive" >
                                        <label for="">Si refirio a la paciente registre manejo y estabilización</label>    
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="RegistrodeReferencia" placeholder="Ingrese si se refirio a la paciente" name="RegistrodeReferencia" style="height: 90px; width: 100%; " maxlength="190">{{$fcprenatalpostparto->RegistrodeReferencia}}</textarea>
                                        </div> 
                                        </div>                                     
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group" responsive>
                                        <label for="">Historia de la enfermedad Actual (*)</label>
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="HistoriaEnfermedadActual" placeholder="Ingrese el historial de la enfermedad"name="HistoriaEnfermedadActual" style="height:90px; width: 100%; " maxlength="190">{{$fcprenatalpostparto->HistoriaEnfermedadActual}}</textarea>
                                        </div>  
                                    </div>                                       
                                </div>


                             </div>
                        </div>
                    </div>