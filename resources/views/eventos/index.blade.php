@extends('layouts.app')

@section('scripts')
<!-- css de Bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >

<!-- js de Bootstrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<link rel="stylesheet" href="{{ asset('fullcalendar/core/main.css')}}">
<link rel="stylesheet" href="{{ asset('fullcalendar/daygrid/main.css')}}">
<link rel="stylesheet" href="{{ asset('fullcalendar/list/main.css')}}">
<link rel="stylesheet" href="{{ asset('fullcalendar/timegrid/main.css')}}">

<script src="{{ asset('fullcalendar/core/main.js')}}" defer></script>

<script src="{{ asset('fullcalendar/interaction/main.js')}}" defer></script>

<script src="{{ asset('fullcalendar/daygrid/main.js')}}" defer></script>
<script src="{{ asset('fullcalendar/list/main.js')}}" defer></script>
<script src="{{ asset('fullcalendar/timegrid/main.js')}}" defer></script>

<script src='fullcalendar/core/locales/es.js'></script>


<script>

document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");

  var calendar = new FullCalendar.Calendar(calendarEl, {
    locale: 'es',
    plugins: ["interaction", "dayGrid", "timeGrid", "list"],
    selectable: true,
    header: {
      left: "prev,next today ",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay"
    },
    dateClick: function (info) {   

        limpiarFormulario();

        $('#txtFecha').val(info.dateStr);
        $('#txtFecha').prop("disabled",true);

        $('#btnAgregar').prop("disabled",false);
        $('#btnModificar').prop("disabled",true);
        $('#btnEliminar').prop("disabled",true);


         
        $('#exampleModal').modal('show');
        //console.log(info);
        //calendar.addEvent({ title:"Evento X", date:info.dateStr});

    },
    eventClick:function(info){

        $('#btnAgregar').prop("disabled",true);
        $('#btnModificar').prop("disabled",false);
        $('#btnEliminar').prop("disabled",false);


        console.log(info);
        console.log(info.event.title);
        console.log(info.event.start);
        console.log(info.event.datospaciente);
        console.log(info.event.establecimiento);
        console.log(info.event.comunidad);

        console.log(info.event.end);
        console.log(info.event.textColor);
        console.log(info.event.backgroundColor);

        console.log(info.event.extendedProps.descripcion);

        $('#txtID').val(info.event.id);
        $('#txtTitulo').val(info.event.title);
        $('#txtDatosP').val(info.event.extendedProps.datospaciente);
        $('#txtEstablecimiento').val(info.event.extendedProps.establecimiento);
        $('#txtComunidad').val(info.event.extendedProps.comunidad);

        mes = (info.event.start.getMonth()+1);
        dia = (info.event.start.getDate());
        anio = (info.event.start.getFullYear());

        mes=(mes<10)?"0"+mes:mes;
        dia=(dia<10)?"0"+dia:dia;

        minutos=info.event.start.getMinutes();
        hora=info.event.start.getHours();

        minutos=(minutos<10)?"0"+minutos:minutos;
        hora=(hora<10)?"0"+hora:hora;

        horario = (hora+":"+minutos);

        $('#txtFecha').val(anio+"-"+mes+"-"+dia);
        $('#txtFecha').prop("disabled",false);
        $('#txtHora').val(horario);
        $('#txtColor').val(info.event.backgroundColor)

        $('#txtDescripcion').val(info.event.extendedProps.descripcion)

         
        $('#exampleModal').modal('show');
        },
        events:"{{ url('/eventos/show') }}"

  });
  //calendar.setOption('locale','es');

  calendar.render();

  $('#btnAgregar').click(function(){
    ObjEvento=recolectarDatosGUI("POST");

    EnviarInformacion('',ObjEvento);
  });

  $('#btnEliminar').click(function(){
    ObjEvento=recolectarDatosGUI("DELETE");

    EnviarInformacion('/'+$('#txtID').val(),ObjEvento);
  });

  $('#btnModificar').click(function(){
    ObjEvento=recolectarDatosGUI("PATCH");

    EnviarInformacion('/'+$('#txtID').val(),ObjEvento);
  });

  function recolectarDatosGUI(method){

    nuevoEvento={
        id:$('#txtID').val(),
        title:$('#txtTitulo').val(),
        descripcion:$('#txtDescripcion').val(),
        datospaciente:$('#txtDatosP').val(),	
        establecimiento:$('#txtEstablecimiento').val(),	
        comunidad:$('#txtComunidad').val(),	
        color:$('#txtColor').val(),	
        textColor:'#FFFFFF',	
        start:$('#txtFecha').val()+" "+$('#txtHora').val(),	
        end:$('#txtFecha').val()+" "+$('#txtHora').val(),  

        '_token':$("meta[name='csrf-token']").attr("content"),
        '_method':method
    }
    return (nuevoEvento);
  }
  function EnviarInformacion(accion,objEvento){

    $.ajax(
        {
            type:"POST",
            url:"{{ url('/eventos') }}"+accion,
            data:objEvento,
            success:function(msg){ 
              console.log(msg);
              $('#exampleModal').modal('toggle');
              calendar.refetchEvents();
            },
            error:function(){ alert("Hay un error");}
        }
    );
  }

  function limpiarFormulario(){

        $('#txtID').val("");
        $('#txtTitulo').val("");
        $('#txtFecha').val("");
        $('#txtDatosP').val("");
        $('#txtEstablecimiento').val("");
        $('#txtComunidad').val("");
        $('#txtHora').val("07:00");
        $('#txtColor').val("");
        $('#txtDescripcion').val("");
  }

});

  </script>
@endsection

@section('content')
<div class="row">
    <div class="col"></div>
    <div class="col-9">
        <div class="container">
        <div id="calendar"></div>
        </div>
    </div>
    <div class="col"></div>
</div>

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

            <div class="form-group col-md-8">
              <label>Titulo de la cita:</label> 
              <input type="text" class="form-control" name="txtTitulo" id="txtTitulo">
            </div>
    
            <div class="form-group col-md-4">
              <label>Hora:</label>
              <input type="time" class="form-control" name="txtHora" id="txtHora">
            </div>

            <div class="form-group col-md-6">
              <label>Datos de la paciente:</label> 
              <input type="text" class="form-control" name="txtDatosP" id="txtDatosP">
            </div>

            <div class="form-group col-md-6">
              <label>Establecimiento:</label> 
              <input type="text" class="form-control" name="txtEstablecimiento" id="txtEstablecimiento">
            </div>

            <div class="form-group col-md-12">
              <label>Comunidad:</label> 
              <input type="text" class="form-control" name="txtComunidad" id="txtComunidad">
            </div>

            <div class="form-outline w-100 mb-1">
                <div class="form-group col-md-12">
                    <label>Descripcion:</label>
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