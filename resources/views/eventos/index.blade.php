@extends('layouts.app')

@section('title')
    Agenda
@endsection



@section('content')

<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Agenda</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                              
                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif 
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-9">
                                    <div class="container">
                                    <div id="calendar"></div>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

<!-- Modal -->
<div class="modal fade"  data-backdrop="false" data-keyboard="false" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos de la cita</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>   
          </button>
        </div>
        <div class="modal-body">
          <div class="d-none">
            ID:
            <input type="text" name="txtID" id="txtID">
            <br>
          </div>

          <div class="form-row">
            <div class="form-group col-md-5">
              <label>Fecha:</label>
              <input type="text" class="form-control" name="txtFecha" id="txtFecha" >
            </div>

            <div class="form-group col-md-4">
              <label>Hora:</label>
              <input type="time" class="form-control" name="txtHora" id="txtHora">
            </div>

            <div class="form-group col-md-12">
              <label>Tipo de consulta:</label> 
              <input type="text" class="form-control" name="txtTitulo" id="txtTitulo">
            </div>

            <div class="col-xs-6 col-sm-6 col-md-10">
              <div class="form-group">
                  <label for="" value="txtDatosP">Datos de Madre (*)</label>
                  <input class="form-control" list="filtroIDPacientes" id="txtDatosP" name="txtDatosP" placeholder="Ingrese datos" autocomplete="off">                                        
                  <datalist id="filtroIDPacientes" name="txtDatosP">
                    @foreach($datospacientes as $idpaciente)
                      <option value="{{$idpaciente->idDatosPersonalesPacientes}}"> {{$idpaciente->NombresPaciente}} {{$idpaciente->ApellidosPaciente}}</option>
                      @endforeach
                    </datalist>
              </div>
            </div>

            <div class="form-group col-md-12">
              <label>Celular:</label> 
              <input type="text" class="form-control" name="txtCelular" id="txtCelular" minlength="8" maxlength="8">
            </div>

          <div class="col-xs-6 col-sm-6 col-md-10">
            <div class="form-group">
                <label for="" value="txtEstable">Establecimiento (*)</label>

                <input class="form-control" list="filtroIDEstable" id="txtEstable" name="txtEstable" placeholder="Ingrese datos" autocomplete="off">                                        
                <datalist id="filtroIDEstable" name="txtEstable">
                  @foreach($establecimientosaludos as $establecimiento)
                  <option value="{{$establecimiento->idEstablecimientoSaludos}}" >{{ $establecimiento->Nombre}}, {{ $establecimiento->PuestoSalud}} </option>
                  @endforeach
                </datalist>
            </div>
        </div>

         <!--- <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="" value="txtEstable">Establecimiento (*)</label>
                <select class="form-control" name="txtEstable">
                    @foreach($establecimientosaludos as $establecimiento)
                    <option value="{{$establecimiento->idEstablecimientoSaludos}}" >{{ $establecimiento->Nombre}}, {{ $establecimiento->PuestoSalud}} </option>
                    @endforeach
                </select>
            </div>
          </div> -->


            	
              <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="form-group">
                  <label>Encargado de llenado</label>
                  <select id="txtUsuario" class="form-control" name="txtUsuario"  maxlength="35">
                    <option value="{{\Illuminate\Support\Facades\Auth::user()->id}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</option>
                  </select>
                </div>
              </div>

            
              <div class="col-xs-12 col-sm-12 col-md-2">
                <div class="form-group">
                  <label>Estado</label>
                  <input type="text" name="txtEstado" id="txtEstado" value="Si" class="form-control" >
                </div>
              </div>
            

            <div class="form-group col-md-12">
              <label>Comunidad:</label> 
              <input type="text" class="form-control" name="txtComunidad" id="txtComunidad">
            </div>

            <div class="form-outline w-100 mb-1">
                <div class="form-group col-md-12">
                <label>Descripción:</label>
                        <textarea class="form-control" name="txtDescripcion" 
                        id="txtDescripcion"  style="height:70px; width: 100%; "></textarea>
                </div>
            </div>

            <div class="form-group col-md-12">
              <label>Color:</label>
              <input type="color" class="form-control" name="txtColor" id="txtColor">
            </div>
      
          </div>
        </div>
        <div class="modal-footer">

            <button id="btnAgregar" class="btn btn-success">Agregar</button>
            <button id="btnModificar" class="btn btn-warning">Modificar</button>
            <button id="btnEliminar" class="btn btn-danger">Eliminar</button>
            <button id="btnCancelar" data-dismiss="modal" class="btn btn-info">Cancelar</button>
          
        </div>
      </div>
    </div>
  </div>
@endsection