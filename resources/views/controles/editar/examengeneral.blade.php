<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Examen general</h3>
    <div class="row ">

        <div class="col-xs-1 col-sm-6 col-md-3">
            <div class="form-group">
                <h6 for="Anemia">Anemia</h6>
                
                <select class="form-control" name="Anemia">
                <option select">{{$controle->Anemia}}</option>
                @if ($controle->Anemia === 'Si')
                <option value="No">No</option>
                @else
                <option value="Si">Si</option>
                @endif
                </select>
                <font size=1.5>
                    Estado general, palidez palmar, conjuntivas, uñas.
                </font>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-4">
            <div class="form-group responsive" >
                <label for="">Descripción de anemia</label>
                <div class="form-outline w-100 mb-4">
                    <textarea class="form-control" id="DescripcionAnemia" name="DescripcionAnemia" style="height:90px" maxlength="100"  placeholder="Ingrese descripción sobre la anemia"></textarea>
                </div>       
            </div>                                       
        </div>

            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="form-group">
                    <label for="">Examen cardiopulmonar</label>
                    {!! Form::text('ExamenCardioPulmonar', null, array('class'=>'form-control', 'maxlength'=>'45', 'placeholder'=>'Ingrese el examen',  'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            
            </div>
    </div>
</div>