<div class="card">
                        <div class="card-body">
                            <h3 class="page__heading">Signos y sintomas de peligro</h3>
                            <div class="row ">
                            <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="HemorragiaVaginal">Hemorragia vaginal</label>
                                        <select class="form-control" name="HemorragiaVaginal">
                                        <option select">{{$controle->HemorragiaVaginal}}</option>
                                        @if ($controle->HemorragiaVaginal === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="DolordeCabeza">Dolor de cabeza severo</label>
                                        <select class="form-control" name="DolordeCabeza">
                                        <option select">{{$controle->DolordeCabeza}}</option>
                                        @if ($controle->DolordeCabeza === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="VisionBorrosa">Vision Borrosa</label>
                                        <select class="form-control" name="VisionBorrosa">
                                        <option select">{{$controle->VisionBorrosa}}</option>
                                        @if ($controle->VisionBorrosa === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Convulsion">Convulsion</label>
                                        <select class="form-control" name="Convulsion">
                                        <option select">{{$controle->Convulsion}}</option>
                                        @if ($controle->Convulsion === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="DolorAbdominal">Dolor abdominal severo (epigastralgia)</label>
                                        <select class="form-control" name="DolorAbdominal">
                                        <option select">{{$controle->DolorAbdominal}}</option>
                                        @if ($controle->DolorAbdominal === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Convulsion">Convulsion</label>
                                        <select class="form-control" name="Convulsion">
                                        <option select">{{$controle->Convulsion}}</option>
                                        @if ($controle->Convulsion === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Convulsion">Convulsion</label>
                                        <select class="form-control" name="Convulsion">
                                        <option select">{{$controle->Convulsion}}</option>
                                        @if ($controle->Convulsion === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="PresionArterial">Presion Arterial</label>
                                        <select class="form-control" name="PresionArterial">
                                        <option select">{{$controle->PresionArterial}}</option>
                                        @if ($controle->PresionArterial === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Fiebre">Fiebre</label>
                                        <select class="form-control" name="Fiebre">
                                        <option select">{{$controle->Fiebre}}</option>
                                        @if ($controle->Fiebre === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="PresentacionesFetales">Presentaciones fetales anormales</label>
                                        <select class="form-control" name="PresentacionesFetales">
                                        <option select">{{$controle->PresentacionesFetales}}</option>
                                        @if ($controle->PresentacionesFetales === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="MotivoConsulta">Motivo de consulta</label>
                                        <select class="form-control" name="MotivoConsulta">
                                        <option value="Embarazo">Embarazo</option>
                                        <option value="Parto">Parto</option>
                                        <option value="Postparto">Postparto</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Si refirio a la paciente registre manejo y estabilización</label>
                                        {!! Form::textarea('RegistrodeReferencia', null, array('style'=>'background:#FCFCFC;height:90px;width:500px;border-color:#E3E3E3','maxlength'=>'190')) !!}
                                    </div>                                       
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Historia de la enfermedad Actual</label>
                                        {!! Form::textarea('HistoriaEnfermedadActual', null, array('style'=>'background:#FCFCFC;height:90px;width:500px;border-color:#E3E3E3','maxlength'=>'200')) !!}
                                    </div>                                       
                                </div>


                             </div>
                        </div>
                    </div>