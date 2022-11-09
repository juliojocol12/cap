<!-- Modal -->
<div class="modal fade bd-example-modal-lg" data-backdrop="false" data-keyboard="false" id="modal-vacunas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle">Total de vacunas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body modal-body-centered">
 
            <div class="col-xl-12">
                <form action="{{ route('vacunas.index') }}" method="GET">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el Nombre para buscar">
                        </div>
                        <div class="col-sm-4 my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                            <a href="{{ route('vacunas.index') }}" class="btn btn-danger mr-3">Borrar busqueda</a>
                        </div>
                    </div>
                </form>
            </div>
                            
            <table class="table  table-striped mt-2 table-responsive">
                <thead style="background-color: #6777ef;">
                    <th style="display: none;">ID</th>
                    <th style="color:#fff;">Nombre de la vacuna</th>
                    <th style="color:#fff;">Tipo de vacuna</th>
                    <th style="color:#fff;">Cantidad</th>
                    <th style="color:#fff;">Estado de la Vacuna</th>
                    <th style="color:#fff;">Fecha ingreso</th>
                    <th style="color:#fff;">Fecha vencimiento</th>
                    <th style="color:#fff;">Usuario que ingreso registro</th>


                    <th style="color:#fff;">Acciones</th>
                </thead>
                                
                <tbody>
                    @if(count($vacunas)<=0)
                        <tr>
                            <td colspan="8">No hay resultados</td>
                        </tr>
                    @else
                        @foreach($vacunas as $vacuna)
                            <tr>
                                <td style="display: none;">{{ $vacuna->idVacunas }}</td>
                                <td>{{$vacuna->NombreVacuna}}</td>
                                <td>{{$vacuna->TipoVacuna}}</td>
                                <td>{{$vacuna->Cantidad}}</td>
                                <td>{{$vacuna->EstadoVacuna}}</td>
                                <td>{{$vacuna->Fechaingreso}}</td>
                                <td>{{$vacuna->FechaVencimiento}}</td>
                                <td>{{\Illuminate\Support\Facades\Auth::user()->name}}</td>

                                <td>
                                    <a class="btn btn-success mr-3" href="{{ route('vacunas.show',  $vacuna->idVacunas) }}">Mostar</a>
                                    <a class="btn btn-info mr-3" href="{{ route('vacunas.edit', $vacuna->idVacunas) }}">Editar</a>
                                                
                                     <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$vacuna->idVacunas}}">Eliminar</button>
                                </td>
                            </tr>
                            @include('vacunas.delete')
                        @endforeach
                    @endif
                </tbody>
            </table>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
  </div>