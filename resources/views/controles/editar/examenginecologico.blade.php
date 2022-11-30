<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Examen ginecológico</h3>
    <div class="row ">

            <div class="col-xs-1 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="TrazasSangreManchado">Trazas de sangre o manchado</label>
                    <select class="form-control" name="TrazasSangreManchado">
                    <option select">{{$controle->TrazasSangreManchado}}</option>
                    @if ($controle->TrazasSangreManchado === 'Si')
                    <option value="No">No</option>
                    @else
                    <option value="Si">Si</option>
                    @endif
                    </select>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="form-group responsive" >
                    <label for="">Descripción de trazas de sangre o manchado</label>
                    <div class="form-outline w-100 mb-4">
                        <textarea class="form-control" id="DescripcionTrazasSangreManchado" name="DescripcionTrazasSangreManchado" style="height:90px; width: 100%; " maxlength="45" placeholder="Ingrese descripción sobre trazas de manchado de sangre">{{$controle->DescripcionTrazasSangreManchado}}</textarea>
                    </div>       
                </div>                                       
            </div>

            <div class="col-xs-1 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="EnfermedadesGinecologicos">Enfermedades ginecológicos</label>
                    <select class="form-control" name="EnfermedadesGinecologicos">
                    <option select">{{$controle->EnfermedadesGinecologicos}}</option>
                    @if ($controle->EnfermedadesGinecologicos === 'Si')
                    <option value="No">No</option>
                    @else
                    <option value="Si">Si</option>
                    @endif
                    </select>
                    <font size=1.5>
                        Verrugas herpes, papilomas, úlcera.
                    </font>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="form-group responsive" >
                    <label for="">Descripción de enfermedades ginecológicos</label>
                    <div class="form-outline w-100 mb-4">
                        <textarea class="form-control" id="DescripcionEnfermedadesGinecologicos" name="DescripcionEnfermedadesGinecologicos" style="height:90px; width: 100%; " maxlength="45" placeholder="Ingrese descripción sobre enfermedades ginecológicos">{{$controle->DescripcionEnfermedadesGinecologicos}}</textarea>
                  
                    </div>       
                </div>                                       
            </div>

            <div class="col-xs-1 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="FlujoVaginal">Flujo vaginal</label>
                    <select class="form-control" name="FlujoVaginal">
                    <option select">{{$controle->FlujoVaginal}}</option>
                    @if ($controle->FlujoVaginal === 'Si')
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