<div class="card">

                        <div class="card-body">
                        <h3 class="page__heading">Embarazo Actual</h3>
                        <div class="row ">
                            <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Diagnosticosospecha">Diagnóstico o sospecha de embarazos múltiples (*)</label>
                                        <select class="form-control" name="Diagnosticosospecha">
                                        <option select">{{$fichamspasriego->Diagnosticosospecha}}</option>
                                        @if ($fichamspasriego->Diagnosticosospecha === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Menosveinte">Menos de 20 años (*)</label>
                                        <select class="form-control" name="Menosveinte">
                                        <option select">{{$fichamspasriego->Menosveinte}}</option>
                                        @if ($fichamspasriego->Menosveinte === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Mastreinta">Más de 35 años (*)</label>
                                        <select class="form-control" name="Mastreinta">
                                        <option select">{{$fichamspasriego->Mastreinta}}</option>
                                        @if ($fichamspasriego->Mastreinta === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Pacienterh">Paciente Rh (-) (*)</label>
                                        <select class="form-control" name="Pacienterh">
                                        <option select">{{$fichamspasriego->Pacienterh}}</option>
                                        @if ($fichamspasriego->Pacienterh === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Hemorragia">Hemorragia vaginal sin importar cantidad (*)</label>
                                        <select class="form-control" name="Hemorragia">
                                        <option select">{{$fichamspasriego->Hemorragia}}</option>
                                        @if ($fichamspasriego->Hemorragia === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="VIH">VIH positivo o sifilis positivo (*)</label>
                                        <select class="form-control" name="VIH">
                                        <option select">{{$fichamspasriego->VIH}}</option>
                                        @if ($fichamspasriego->VIH === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Presionarterial">Presión arterial diastótica de 90 mm Hg o más durante el registro (*)</label>
                                        <select class="form-control" name="Presionarterial">
                                        <option select">{{$fichamspasriego->Presionarterial}}</option>
                                        @if ($fichamspasriego->Presionarterial === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Anemiaclinica">Anemia clínica de laboratorio (*)</label>
                                        <select class="form-control" name="Anemiaclinica">
                                        <option select">{{$fichamspasriego->Anemiaclinica}}</option>
                                        @if ($fichamspasriego->Anemiaclinica === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Desnutricion">Desnutrición u obesidad (*)</label>
                                        <select class="form-control" name="Desnutricion">
                                        <option select">{{$fichamspasriego->Desnutricion}}</option>
                                        @if ($fichamspasriego->Desnutricion === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Dolorabdominal">Dolor abdominal (*)</label>
                                        <select class="form-control" name="Dolorabdominal">
                                        <option select">{{$fichamspasriego->Dolorabdominal}}</option>
                                        @if ($fichamspasriego->Dolorabdominal === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Sintomatologia">Sintomatología urinaria (*)</label>
                                        <select class="form-control" name="Sintomatologia">
                                        <option select">{{$fichamspasriego->Sintomatologia}}</option>
                                        @if ($fichamspasriego->Sintomatologia === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Ictericia">Ictericia (*)</label>
                                        <select class="form-control" name="Ictericia">
                                        <option select">{{$fichamspasriego->Ictericia}}</option>
                                        @if ($fichamspasriego->Ictericia === 'Si')
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