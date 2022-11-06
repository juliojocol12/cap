                        <div class="card">
                            <div class="card-body">
                                <h3 class="page__heading">Evalúe signos y síntomas de peligro en el posparto</h3>
                                    <div class="row ">

                                        <div class="col-xs-1 col-sm-6 col-md-2">
                                            <div class="form-group">
                                                <label for="HemorragiaVaginal">Hemorragia vaginal (*)</label>
                                                <select class="form-control" name="HemorragiaVaginal">
                                                <option select">{{$fcevaluacionposparto->HemorragiaVaginal}}</option>
                                                @if ($fcevaluacionposparto->HemorragiaVaginal === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-1 col-sm-6 col-md-2">
                                            <div class="form-group">
                                                <label for="DolordeCabeza">Dolor de cabeza severo (*)</label>
                                                <select class="form-control" name="DolordeCabeza">
                                                <option select">{{$fcevaluacionposparto->DolordeCabeza}}</option>
                                                @if ($fcevaluacionposparto->DolordeCabeza === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif 
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-1 col-sm-6 col-md-2">
                                            <div class="form-group">
                                                <label for="VisionBorrosa">Vision borrosa (*)</label>
                                                <select class="form-control" name="VisionBorrosa">
                                                    <option select">{{$fcevaluacionposparto->VisionBorrosa}}</option>
                                                    @if ($fcevaluacionposparto->VisionBorrosa === 'Si')
                                                        <option value="No">No</option>
                                                    @else
                                                        <option value="Si">Si</option>
                                                    @endif 
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-1 col-sm-6 col-md-2">
                                            <div class="form-group">
                                                <label for="Convulsion">Convulsión (*)</label>
                                                <select class="form-control" name="Convulsion">
                                                    <option select">{{$fcevaluacionposparto->Convulsion}}</option>
                                                    @if ($fcevaluacionposparto->Convulsion === 'Si')
                                                        <option value="No">No</option>
                                                    @else
                                                        <option value="Si">Si</option>
                                                    @endif 
                                                </select>
                                            </div>
                                        </div>

                                        
                                        <div class="col-xs-1 col-sm-6 col-md-2">
                                            <div class="form-group">
                                                <label for="PresionArterialSignos">Presión arterial alta (140/190) (*)</label>
                                                <select class="form-control" name="PresionArterialSignos">
                                                    <option select">{{$fcevaluacionposparto->PresionArterialSignos}}</option>
                                                    @if ($fcevaluacionposparto->PresionArterialSignos === 'Si')
                                                        <option value="No">No</option>
                                                    @else
                                                        <option value="Si">Si</option>
                                                    @endif 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-1 col-sm-6 col-md-2">
                                            <div class="form-group">
                                                <label for="Fiebre">Fiebre (*)</label>
                                                <select class="form-control" name="Fiebre">
                                                    <option select">{{$fcevaluacionposparto->Fiebre}}</option>
                                                    @if ($fcevaluacionposparto->Fiebre === 'Si')
                                                        <option value="No">No</option>
                                                    @else
                                                        <option value="Si">Si</option>
                                                    @endif 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-1 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="Coagulos">Coágulos con mal olor (Loquios) (*)</label>
                                                <select class="form-control" name="Coagulos">
                                                    <option select">{{$fcevaluacionposparto->Coagulos}}</option>
                                                    @if ($fcevaluacionposparto->Coagulos === 'Si')
                                                        <option value="No">No</option>
                                                    @else
                                                        <option value="Si">Si</option>
                                                    @endif 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-1 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="DolorAbdominal">Dolor abdominal (epigastralgia) (*)</label>
                                                <select class="form-control" name="DolorAbdominal">
                                                    <option select">{{$fcevaluacionposparto->DolorAbdominal}}</option>
                                                    @if ($fcevaluacionposparto->DolorAbdominal === 'Si')
                                                        <option value="No">No</option>
                                                    @else
                                                        <option value="Si">Si</option>
                                                    @endif 
                                                </select>
                                            </div>
                                        </div>
                                           
                                </div>
                            </div>
                        </div>