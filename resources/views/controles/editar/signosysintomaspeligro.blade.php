<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Signos o síntomas de peligro</h3> <br>
        <div class="row ">
    
            <div class="col-xs-1 col-sm-6 col-md-6">
                <div class="form-group">
                    <h6 for="EvaluacionInicialRapida">Evaluación inicial rápida</h6>
                    <font size=2>
                        Hemorragia vaginal, palidez, dolor cabeza, hipertensión, dolor 
                        como estómago,trastornos visuales, fiebre.
                    </font>
                    <select class="form-control" name="EvaluacionInicialRapida">
                    <option select">{{$controle->EvaluacionInicialRapida}}</option>
                    @if ($controle->EvaluacionInicialRapida === 'Si')
                    <option value="No">No</option>
                    @else
                    <option value="Si">Si</option>
                    @endif
                    </select>
                </div>
            </div>            
        </div>

        <div class="row ">
            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="form-group responsive" >
                    <label for="">Descripción de evaluación</label>
                    <div class="form-outline w-100 mb-4">
                       <textarea class="form-control" id="DescripcionEvaluacion" name="DescripcionEvaluacion" style="height:90px; width: 100%; " maxlength="150" placeholder="Ingrese descripción sobre la evaluación inicial">{{$controle->DescripcionEvaluacion}}</textarea>
                    </div>       
                </div>                                       
            </div>
        </div>
    </div>
</div>